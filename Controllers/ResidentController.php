<?php




class ResidentController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new ResidentDAO();
    }

    public function index()
    {

        $resident = $this->dao->fetchAll();
        include('../Views/Home.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/resident');
    }

    public function login($id, $data)
    {
        $resident = $this->dao->verify($data);
        var_dump($resident);
        if ($resident) {
            header('Location:/Home');
        } else {
            echo "Erreur au login";
        }

    }
    public function forms(){

        include('../Views/Resident/Register.php');

    }
}