<?php


class AppartmentController extends AbstractController
{public function __construct()
{
    $this->dao = new AppartmentDAO();
}

    public function index()
    {

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