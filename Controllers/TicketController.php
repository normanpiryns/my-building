<?php
session_start();

class TicketController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new TicketDAO();
    }

    public function index()
    {
        $userDao = new UserDAO();
        $userId = $userDao->getIdByUsername($_SESSION['username']);
        $_SESSION['userId'] = $userId['id'];
        $ticketDao = new TicketDAO();
        $tickets = $ticketDao->getTicketsByUserId($userId['id']);
        include('../Views/Templates/head.php');
        include('../Views/Ticket/List.php');
        include('../Views/Templates/footer.php');
    }
    public function store ($id, $data) {
        $this->dao->store($data);
    }

    public function register($id, $data)
    {
        var_dump('in register', $data);
        $this->store(false, $data);
        header('Location:/ticket');
    }


    public function forms(){

        include('../Views/Templates/head.php');
        include('../Views/Ticket/Register.php');
        include('../Views/Templates/footer.php');
    }

    public function handle(){
        $userDao = new UserDAO();
        $ticket = $this->dao->fetchAll();
        include('../Views/Templates/head.php');
        include('../Views/Ticket/handle.php');
        include('../Views/Templates/footer.php');
    }

    public function create()
    {

        $buildingDao = new BuildingDAO();
        $buildings = $buildingDao->fetchAll();

        include('../Views/Templates/head.php');
        include('../Views/Ticket/register.php');
        include('../Views/Templates/footer.php');
    }

    public function insert ($id, $data) {
        $this->dao->store(false, $data);
        header('Location:/ticket');
    }

    public function edit($id)
    {    
         $ticketDao = new TicketDAO();
         $ticket = $ticketDao->getTicketById($id);
 
         include('../Views/Templates/head.php');
         include('../Views/ticket/statusform.php');
         include('../Views/Templates/footer.php');
    }

    public function update($id, $data)
   {    
        
        $this->dao->update($id,$data);
        header("Location:/ticket/handle");
   }

   public function delete($id)
    {
        $this->dao->delete($id);
        header('Location:/ticket/handle');
    }

}