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
        $message = htmlspecialchars($_POST['message']);


        $query= $this->connection ->query("INSERT INTO communications
    (title,message)
    VALUES('$title','$message',)");


    }


}