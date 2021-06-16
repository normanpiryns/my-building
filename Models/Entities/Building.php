<?php


class Building
{
    private $id;
    private $street;
    private $number;
    private $city;
    private $syndic;





    public function __construct($id,$street,$number,$city=false,$syndic=false){

        $this->id = $id;
        $this->street = $street;
        $this->number = $number;
        $this->city= $city;
        $this->syndic=$syndic;


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