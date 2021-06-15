<?php


class City
{
    private $id;
    private $name;
    private $postcode;




    public function __construct($id,$name,$postcode){

        $this->id = $id;
        $this->name = $name;
        $this->postcode= $postcode;



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