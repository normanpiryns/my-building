<?php


class Syndic
{
    private $id;
    private $name;
    private $email;
    private $password;



    public function __construct($id,$name,$email,$password){

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

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