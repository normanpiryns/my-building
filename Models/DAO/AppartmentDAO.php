<?php


class AppartmentDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('appartment');
    }



    function create ($result) {
        return new Appartment(
            $result['id'],
            $result['number'],
            $result['building'],
            $result['owner'],
            $result['rented']

        );
    }


    function deepCreate ($result) {
        return new Appartment(
            $result['id'],
            $result['number'],
            $result['building'],
            $result['owner'],
            $result['rented']

        );;
    }
    public function createNew ($result) {
        return new Appartment(
            $result['id'],
            $result['number'],
            $result['building'],
            $result['owner'],
            $result['rented']

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
        $number = htmlspecialchars($_POST['number']);
        $building = htmlspecialchars($_POST['building']);
        $owner = htmlspecialchars($_POST['owner']);
        $rented = htmlspecialchars($_POST['rented']);

        $query= $this->connection ->query("INSERT INTO appartment
    (number,building,owner,rented)
    VALUES('$number','$building','$owner','$rented')");


    }


}