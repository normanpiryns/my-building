<?php


class Owner
{
    private $id;
    private $firstName;
    private $lastName;
    private $telephone;
    private $email;
    private $birthDate;




    public function __construct($id,$firstName,$lastName,$telephone,$email,$birthDate){

        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->telephone= $telephone;
        $this->email= $email;
        $this->birthDate = $birthDate;



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