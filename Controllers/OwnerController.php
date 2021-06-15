<?php


class OwnerController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new OwnerDAO();
    }

    public function index()
    {

        $owner = $this->dao->fetchAll();
        include('../Views/Owner.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/owner');
    }


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Owner/Register.php');
        include('../Views/Templates/footer.php');
    }

}