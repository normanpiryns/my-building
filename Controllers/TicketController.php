<?php


class TicketController extends AbstractController
{
    public function __construct()
    {
        $this->dao = new TicketsDAO();
    }

    public function index()
    {

        $ticket = $this->dao->fetchAll();
        include('../Views/Tickets.php');
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

}