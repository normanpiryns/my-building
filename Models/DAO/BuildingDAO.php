<?php


class BuildingDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('buildings');
    }



    function create ($result) {
        return new Building(
            $result['id'],
            $result['name'],
            $result['street'],
            $result['number'],
            $result['city']

        );
    }


    function deepCreate ($result) {
        return new Building(
            $result['id'],
            $result['name'],
            $result['street'],
            $result['number'],
            $result['city']

        );
    }
    public function createNew ($result) {
        return new Building(
            $result['id'],
            $result['name'],
            $result['street'],
            $result['number'],
            $result['city']

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

        
        try
        {
            $statement = $this->connection->prepare("INSERT INTO {$this->table} (name, street, number, city) VALUES (?,?,?,?)");

            $statement->execute([
                htmlspecialchars($data['name']),
                htmlspecialchars($data['street']),
                htmlspecialchars($data['number']),
                htmlspecialchars($data['city']),
                
            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        }
        


    }

    public function getBuildingById($id)
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
                "UPDATE {$this->table} SET name = ?, street = ?, number = ?, city = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['name']),
                htmlspecialchars($data['street']),
                htmlspecialchars($data['number']),
                htmlspecialchars($data['city']),
                htmlspecialchars($data['id'])
                
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }

    }

}