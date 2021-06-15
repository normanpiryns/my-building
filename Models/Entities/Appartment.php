<?php


class Appartment
{
    private $id;
    private $number;
    private $building;
    private $owner;
    private $rented;





    public function __construct($id,$number,$building=false,$owner=false,$rented){

        $this->id = $id;
        $this->number = $number;
        $this->building = $building;
        $this->owner = $owner;
        $this->rented = $rented;




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