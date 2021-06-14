<?php


class ResidentController extends AbstractController
{
    public function __construct(){
        $this ->dao = new ResidentDAO();
    }
    public function index(){

        $resident = $this->dao->fetchAll();
        include('../Views/Resident.php');
    }

}