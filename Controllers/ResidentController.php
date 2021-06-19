<?php




class ResidentController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new ResidentDAO();
    }

    public function index()
    {

        $residents = $this->dao->fetchAll();
        $appartment = new AppartmentDAO();
        $building = new BuildingDAO();
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
    public function insert ($id,$data) {
        $this->dao->store(false,$data);
        header('Location:/resident');
    }

    public function delete($id)
    {
        $this->dao->delete($id);
        header('Location:/resident');
    }
    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Resident/Register.php');
        include('../Views/Templates/footer.php');
    }

    public function edit($id)
    {
        $resiDao = new ResidentDAO();
        $resident = $resiDao->getResidentById($id);
        $buildingDao = new BuildingDAO();
        $buildings = $buildingDao->fetchAll();

        include('../Views/Templates/head.php');
        include('../Views/resident/edit.php');
        include('../Views/Templates/footer.php');
    }
    public function update($id, $data)
    {

        $this->dao->update($id,$data);
        header("Location:/resident");
    }

    public function create()
    {
        $buildingDao = new BuildingDAO();
        $buildings = $buildingDao->fetchAll();
       
        

        include('../Views/Templates/head.php');
        include('../Views/Resident/register.php');
        include('../Views/Templates/footer.php');
    }
}