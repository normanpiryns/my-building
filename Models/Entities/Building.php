<?php


class Building
{
    private $id;
    private $name;
    private $street;
    private $number;
    private $city;





    public function __construct($id,$name,$street,$number,$city=false){

        $this->id = $id;
        $this->name = $name;
        $this->street = $street;
        $this->number = $number;
        $this->city= $city;


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