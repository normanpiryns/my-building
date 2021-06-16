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
        if ($data['username'] != 'Syndic'){
            $this->store(false, $data);
            header('Location:/index');

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
    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Forms/register.php');
        include('../Views/Templates/footer.php');
    }

}