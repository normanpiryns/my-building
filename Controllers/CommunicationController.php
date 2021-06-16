<?php


class CommunicationController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new CommunicationDAO();
    }

    public function index()
    {

        $communication = $this->dao->fetchAll();
        include('../Views/Communication.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/communication');
    }


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Communication/Register.php');
        include('../Views/Templates/footer.php');
    }

}