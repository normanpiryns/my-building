<?php


class SyndicController extends AbstractController
{
    public function __construct(){
        $this -> dao = new SyndicDAO();

    }

    public function index(){
        $syndic = $this->dao->fetchAll();


    }

}