<?php


class BuildingDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('buildings');
    }



    function create ($result) {
        return new Building(
            $result['id'],
            $result['street'],
            $result['number'],
            $result['fk_city'],
            $result['fk_syndic']

        );
    }


    function deepCreate ($result) {
        return new Building(
            $result['id'],
            $result['street'],
            $result['number'],
            $result['fk_city'],
            $result['fk_syndic']

        );
    }
    public function createNew ($result) {
        return new Building(
            $result['id'],
            $result['street'],
            $result['number'],
            $result['fk_city'],
            $result['fk_syndic']

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
        $street = htmlspecialchars($_POST['street']);
        $number = htmlspecialchars($_POST['number']);
        $city = htmlspecialchars($_POST['city']);

        $query= $this->connection ->query("INSERT INTO buildings
    (street,number,city)
    VALUES('$street','$number','$city')");


    }



}