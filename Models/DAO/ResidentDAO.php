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
            $result['birthDate'],
            $result['fk_appartment']

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

    function insert ($data) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $birthDate= $_POST['birthDate'];
        $appartment = $_POST['appartment '];

        $query= $this->connection ->query("INSERT INTO residents
    (firstName,lastName,telephone,email,password,birthDate,fk_appartment)
    VALUES('$firstName','$lastName','$telephone','$email','$password','$birthDate','$appartment')");

    }

}