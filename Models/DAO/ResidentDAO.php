<?php


class ResidentDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('residents');
    }



    function create ($result) {
        return new Resident(
            $result['id'],
            $result['firstName'],
            $result['lastName'],
            $result['telephone'],
            $result['email'],
            $result['password'],
            $result['birthDate']

        );
    }


    function deepCreate ($result) {
        return new Resident(
            $result['id'],
            $result['firstName'],
            $result['lastName'],
            $result['telephone'],
            $result['email'],
            $result['password'],
            $result['birthDate']


        );
    }
    public function createNew ($result) {
        return new Resident(
            $result['id'],
            $result['firstName'],
            $result['lastName'],
            $result['telephone'],
            $result['email'],
            $result['password'],
            $result['birthDate']
        );
    }

    function delete ($data) {
        if(empty($data['id'])) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $data['id']
            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        }
    }

    function store ($data) {
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $birthDate= htmlspecialchars($_POST['birthDate']);


        $query= $this->connection ->query("INSERT INTO residents
    (firstName,lastName,telephone,email,password,birthDate)
    VALUES('$firstName','$lastName','$telephone','$email','$password','$birthDate')");


    }




    public function verify ($data) {
        if (empty($data['username']) || empty($data['password'])) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE firstName = ?");
            $statement->execute([
                $data['username']
            ]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            $resident = $this->createNew($result);
            if($resident) {
                $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
                if(password_verify($password, $resident->password)) {
                    var_dump('user is ok');
                    $resident = $this->setToken($resident);
                    return $resident;
                }
            }
            var_dump('incorrect password ');
            return false;
        } catch (PDOException $e) {
            print $e->getMessage();
            return false;
        }
    }

    public function setToken($resident) {

        $token = bin2hex(random_bytes(8)) . "." . time();
        $resident->session_token = $token;
        setcookie('session_token', $token, time()+60*60*24, "/");
        $this->updateToken($resident);
        return $resident;
    }

    public function updateToken ($resident) {
        try {
            $statement = $this->connection->prepare("UPDATE {$this->table} SET session_token = ? WHERE id = ?");
            $statement->execute([
                $resident->session_token,
                $resident->id
            ]);
            return true;
        } catch (PDOException $e) {
            print $e->getMessage();
            return false;
        }
    }

    public function fetchBySession($session_token) {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE session_token = ?");
            $statement->execute([$session_token]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $this->deepCreate($result);
        } catch (PDOException $e) {
            print $e->getMessage();
            return false;
        }
    }

}