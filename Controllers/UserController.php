<?php
session_start();
include("../Controllers/functions.php");

class UserController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new UserDAO();
    }

    public function index()
    {

        $user = $this->dao->fetchAll();
        include('../Views/User.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function delete($id)
    {
        $this->dao->delete($id);
        header('Location:/user');
    }

    public function register($id, $data)
    {
        if ($data['username'] != 'Syndic'){
            if($data['username'] == "" || $data['password'] == '' || $data['email'] == '') {
                echo "Please fill the fields";
                return;
            }
            if(!CheckNumber($data['username'])){
                echo "Username should not contain a number";
                return;
            }
            else {
                $this->store(false, $data);
                header('Location:/index');
            }

            

        }else{
            echo 'registration error, please chose another username ';
        }
        ;
    }

    public function login($id, $data)
    {
        $user = $this->dao->verify($data);
        var_dump($user);
        if ($user) {

            $_SESSION['username']=$data['username'];
            if ($_SESSION['username']== 'Syndic'){
                header('Location:/syndic');
            }else {
                header('Location:/Userboard');
            }


        } else {
            echo "log error";
        }

    }
    public function create (){

        include('../Views/Templates/head.php');
        include('../Views/Forms/register.php');
        include('../Views/Templates/footer.php');
    }

    public function edit($id)
    {
        $UserDao = new UserDAO();
        $User = $UserDao->getUserById($id);

        include('../Views/Templates/head.php');
        include('../Views/user/edit.php');
        include('../Views/Templates/footer.php');
    }

    public function update($id,$data)
    {
        $this->dao->update($id,$data);
        header("Location:/user");

    }

}