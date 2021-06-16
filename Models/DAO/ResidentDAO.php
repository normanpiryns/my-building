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
        $birthDate= htmlspecialchars($_POST['birthDate']);


        $query= $this->connection ->query("INSERT INTO residents
    (firstName,lastName,telephone,email,birthDate)
    VALUES('$firstName','$lastName','$telephone','$email','$birthDate')");


    }

}