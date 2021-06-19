<?php


class TicketDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('tickets');
    }



    function create ($result) {
        return new Ticket(
            $result['id'],
            $result['title'],
            $result['description'],
            $result['user'],
            $result['appartment'],
            $result['building'],
            $result['status']

        );
    }


    function deepCreate ($result) {
        return new Ticket(
            $result['id'],
            $result['title'],
            $result['description'],
            $result['user'],
            $result['appartment'],
            $result['building'],
            $result['status']

        );
    }
    public function createNew ($result) {
        return new Ticket(
            $result['id'],
            $result['title'],
            $result['description'],
            $result['user'],
            $result['appartment'],
            $result['building'],
            $result['status']

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
            $statement = $this->connection->prepare("INSERT INTO {$this->table} (title, description, user, appartment, building) VALUES (?,?,?,?,?)");

            $statement->execute([
                htmlspecialchars($data['title']),
                htmlspecialchars($data['description']),
                htmlspecialchars($data['user']),
                htmlspecialchars($data['appartment']),
                htmlspecialchars($data['building'])    
            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        
        }
    }
    
    function getTicketsByUserId($userId)
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE user = ?");
            $statement->execute([
                $userId
            ]);
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $this->createAll($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function update($id, $data){
        var_dump($id, $data);

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET status = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['status']),
                htmlspecialchars($data['id'])
                
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }

    }

    public function getTicketById($id)
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


}