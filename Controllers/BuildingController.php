<?php


class BuildingController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new BuildingDAO();
    }

    public function index()
    {

        $building = $this->dao->fetchAll();
        include('../Views/Building.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/building');
    }


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Building/Register.php');
        include('../Views/Templates/footer.php');
    }

}