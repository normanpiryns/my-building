<?php


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

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/user');
    }

    public function login($id, $data)
    {
        $user = $this->dao->verify($data);
        var_dump($user);
        if ($user) {

            $_SESSION['username']=$data['username'];

                header('Location:/Userboard');


        } else {
            echo "Erreur au login";
        }

    }
    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Forms/register.php');
        include('../Views/Templates/footer.php');
    }

}