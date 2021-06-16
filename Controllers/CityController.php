<?php


class CityController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new CityDAO();
    }

    public function index()
    {

        $city = $this->dao->fetchAll();
        include('../Views/City.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/city');
    }


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/City/Register.php');
        include('../Views/Templates/footer.php');
    }

}