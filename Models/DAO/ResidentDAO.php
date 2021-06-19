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
            $result['birthDate'],
            $result['appartment'],
            $result['building']
            

        );
    }


    function deepCreate ($result) {
        return new Resident(
            $result['id'],
            $result['firstName'],
            $result['lastName'],
            $result['telephone'],
            $result['email'],
            $result['birthDate'],
            $result['appartment'],
            $result['building']


        );
    }
    public function createNew ($result) {
        return new Resident(
            $result['id'],
            $result['firstName'],
            $result['lastName'],
            $result['telephone'],
            $result['email'],
            $result['birthDate'],
            $result['appartment'],
            $result['building']
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

    function store ($id,$data)
    {


        try {
            $statement = $this->connection->prepare("INSERT INTO {$this->table} (firstName, lastName, telephone,  birthDate, email, appartment, building) VALUES (?,?,?,?,?,?,?)");

            $statement->execute([
                htmlspecialchars($data['firstname']),
                htmlspecialchars($data['lastname']),
                htmlspecialchars($data['telephone']),
                htmlspecialchars($data['birthDate']),
                htmlspecialchars($data['email']),
                htmlspecialchars($data['appartment']),
                htmlspecialchars($data['building'])
                

            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }



        public function update($id, $data){

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET firstName = ?, lastName = ?, telephone = ?, birthDate = ?,email = ?, appartment = ?, building = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['firstname']),
                htmlspecialchars($data['lastname']),
                htmlspecialchars($data['telephone']),
                htmlspecialchars($data['birthDate']),
                htmlspecialchars($data['email']),
                htmlspecialchars($data['appartment']),
                htmlspecialchars($data['building']),
                htmlspecialchars($data['id'])

            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }

    }

    public function getResidentById($id)
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