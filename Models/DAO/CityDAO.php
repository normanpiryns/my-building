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

    function delete ($id) {
        var_dump($id);
        if(empty($id)) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        }
    }

    function store ($id, $data) {
        var_dump($data);

        try
        {
            $statement = $this->connection->prepare("INSERT INTO {$this->table} (name, postcode) VALUES (?,?)");

            $statement->execute([
                htmlspecialchars($data['name']),
                htmlspecialchars($data['postcode']),

            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getCityById($id)
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $this->create($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function update($id, $data){

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET name = ?, postcode = ?WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['name']),
                htmlspecialchars($data['postcode']),
                htmlspecialchars($data['id'])

            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }

    }


}