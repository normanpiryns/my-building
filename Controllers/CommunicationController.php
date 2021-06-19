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
    public function insert ($id, $data) {
        $this->dao->store(false,$data);
        header('Location:/communication');
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/communication');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }



    public function edit($id)
    {
        $comDao = new CommunicationDAO();
        $communication = $comDao->getCommunicationById($id);

        include('../Views/Templates/head.php');
        include('../Views/communication/edit.php');
        include('../Views/Templates/footer.php');
    }

    public function update($id, $data)
    {

        $this->dao->update($id,$data);
        header("Location:/communication");
    }

    public function delete($id)
    {
        $this->dao->delete($id);
        header('Location:/communication ');
    }

    public function create()
    {
        include('../Views/Templates/head.php');
        include('../Views/Communication/register.php');
        include('../Views/Templates/footer.php');
    }

}