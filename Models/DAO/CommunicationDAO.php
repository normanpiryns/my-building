<?php


class CommunicationDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('communications');
    }



    function create ($result) {
        return new Communication(
            $result['id'],
            $result['title'],
            $result['message']
        );
    }


    function deepCreate ($result) {
        return new Communication(
            $result['id'],
            $result['title'],
            $result['message']
        );
    }
    public function createNew ($result) {
        return new Communication(
            $result['id'],
            $result['title'],
            $result['message']
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
            $statement = $this->connection->prepare("INSERT INTO {$this->table} (title, message) VALUES (?,?)");

            $statement->execute([
                htmlspecialchars($data['title']),
                htmlspecialchars($data['message']),
            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        }
    }


    public function getCommunicationById($id)
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

    public function update($id, $data)
    {

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET title = ?, message  = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['title']),
                htmlspecialchars($data['message']),
                htmlspecialchars(($data['id']))


            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }


}