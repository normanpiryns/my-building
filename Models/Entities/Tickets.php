<?php


class Tickets
{
    private $id;
    private $title;
    private $description;
    private $user;
    private $appartment;
    private $building;




    public function __construct($id,$title,$description,$user,$appartment,$building){

        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->user = $user;
        $this->appartment = $appartment;
        $this->building = $building;



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