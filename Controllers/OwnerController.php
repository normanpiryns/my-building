<?php


class OwnerController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new OwnerDAO();
    }

    public function index()
    {

        $owner = $this->dao->fetchAll();
        include('../Views/Owner.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/owner');
    }


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Owner/Register.php');
        include('../Views/Templates/footer.php');
    }

    public function create()
    {

        include('../Views/Templates/head.php');
        include('../Views/Owner/register.php');
        include('../Views/Templates/footer.php');
    }

    public function insert ($id, $data) {
        $this->dao->store(false, $data);
        header('Location:/owner');
    }

    public function edit($id)
   {    
        $ownerDao = new OwnerDAO();
        $owner = $ownerDao->getOwnerById($id);

        include('../Views/Templates/head.php');
        include('../Views/owner/edit.php');
        include('../Views/Templates/footer.php');
   }

   public function update($id, $data)
   {    
        
        $this->dao->update($id,$data);
        header("Location:/owner");
   }

   public function delete($id)
    {
        $this->dao->delete($id);
        header('Location:/owner');
    }
}