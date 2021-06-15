<?php


class CityDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('cities');
    }



    function create ($result) {
        return new City(
            $result['id'],
            $result['name'],
            $result['postcode']

        );
    }


    function deepCreate ($result) {
        return new City(
            $result['id'],
            $result['name'],
            $result['postcode']

        );
    }
    public function createNew ($result) {
        return new City(
            $result['id'],
            $result['name'],
            $result['postcode']

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
        $name = htmlspecialchars($_POST['name']);
        $postcode = htmlspecialchars($_POST['postcode']);


        $query= $this->connection ->query("INSERT INTO cities
    (name,postcode)VALUES('$name','$postcode')");


    }


}