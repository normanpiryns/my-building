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
    public function insert ($id, $data) {
        $this->dao->store(false,$data);
        header('Location:/city');

    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/city');
    }


    public function create(){

        include('../Views/Templates/head.php');
        include('../Views/City/Register.php');
        include('../Views/Templates/footer.php');
    }

    public function edit($id)
    {
        $CityDao = new CityDAO();
        $city = $CityDao->getCityById($id);

        include('../Views/Templates/head.php');
        include('../Views/city/edit.php');
        include('../Views/Templates/footer.php');
    }

    public function update($id, $data)
    {

        $this->dao->update($id,$data);
        header("Location:/city");
    }

    public function delete($id)
    {
        $this->dao->delete($id);
        header('Location:/city');
    }

}