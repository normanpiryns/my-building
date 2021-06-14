<?php

abstract class AbstractController {

    public function getResident() {
        if (!isset($_COOKIE['session_token'])) {
            var_dump('no cookie!');
            return false;
        }

        $residentDAO = new ResidentDAO();
        return $residentDAO->fetchBySession($_COOKIE['session_token']);
    }

    public function isLogged() {
        $resident = $this->getResident();
        if(!$resident) {
            include('../Views/Forms/Login.php');
            die;
        }
        return $resident;
    }

    public function create () {
        var_dump('no create');
    }

    public function edit ($id) {
        var_dump('no edit');
    }

    public function delete ($id, $data) {
        var_dump('no delete');
    }

    public function show ($id) {
        var_dump('no show');
    }

    public function update ($id, $data) {
        var_dump('no update');
    }

    public function insert ($id, $data) {
        var_dump('no store');
    }

    public function index () {
        var_dump('no index');
    }
}