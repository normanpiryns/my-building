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
        include('../Views/Resident.php');
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


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Resident/Register.php');
        include('../Views/Templates/footer.php');
    }
}