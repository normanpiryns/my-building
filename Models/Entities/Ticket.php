<?php


class Ticket
{
    private $id;
    private $title;
    private $description;
    private $user;
    private $appartment;
    private $building;
    private $status;




    public function __construct($id,$title,$description,$user,$appartment,$building,$status){

        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->user = $user;
        $this->appartment = $appartment;
        $this->building = $building;
        $this->status = $status;



    }

    public function __get($prop){
        if (property_exists($this,$prop)){
            return $this->$prop;
        }
    }

    public function __set($prop,$value){
        if(property_exists($this,$prop)){
            $this->$prop = $value;
        }
    }

}