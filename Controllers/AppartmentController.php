<?php


class AppartmentController extends AbstractController
{public function __construct()
{
    $this->dao = new AppartmentDAO();
    $this->dao = new BuildingDAO();
}

    public function index()
    {
        $building = $this->dao->fetchAll();
        $appartment = $this->dao->fetchAll();
        include('../Views/Appartment.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {

        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/appartment');
    }


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Appartment/Register.php');
        include('../Views/Templates/footer.php');
    }

}