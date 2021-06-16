<?php


class TicketsDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('tickets');
    }



    function create ($result) {
        return new Tickets(
            $result['id'],
            $result['title'],
            $result['description'],
            $result['user'],
            $result['appartment'],
            $result['building']

        );
    }


    function deepCreate ($result) {
        return new Tickets(
            $result['id'],
            $result['title'],
            $result['description'],
            $result['user'],
            $result['appartment'],
            $result['building']

        );
    }
    public function createNew ($result) {
        return new Tickets(
            $result['id'],
            $result['title'],
            $result['description'],
            $result['user'],
            $result['appartment'],
            $result['building']

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
        $title = htmlspecialchars($_POST['title']);
        $description = htmlspecialchars($_POST['description']);
        $user = htmlspecialchars($_POST['user']);
        $appartment= htmlspecialchars($_POST['appartment']);
        $building = htmlspecialchars($_POST['building']);

        $query= $this->connection ->query("INSERT INTO tickets
    (title,description,user,appartment,building)
    VALUES('$title','$description','$user','$appartment','$building')");


    }


}