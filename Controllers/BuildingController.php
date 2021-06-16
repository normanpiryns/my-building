<?php


class BuildingController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new BuildingDAO();
    }

    public function index()
    {

        $buildings = $this->dao->fetchAll();
        $cityDao = new CityDAO();

        include('../Views/Building.php');
    }

    public function insert ($id, $data) {
        $this->dao->store(false, $data);
        header('Location:/building');
    }

    public function create()
    {

        $cityDao = new CityDAO();
        $cities = $cityDao->fetchAll();

        include('../Views/Templates/head.php');
        include('../Views/Building/Register.php');
        include('../Views/Templates/footer.php');
    }


    

    public function delete($id)
    {
        $this->dao->delete($id);
        header('Location:/building');
    }

   public function update($id, $data)
   {    
        
        $this->dao->update($id,$data);
        header("Location:/building");
   }

   public function edit($id)
   {    
        $buildingDao = new BuildingDAO();
        $cityDao = new CityDAO();

        $building = $buildingDao->getBuildingById($id);
        $cities = $cityDao->fetchAll();


        include('../Views/Templates/head.php');
        include('../Views/Building/edit.php');
        include('../Views/Templates/footer.php');
   }

}