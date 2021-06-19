<?php


class Resident
{
    private $id;
    private $firstName;
    private $lastName;
    private $telephone;
    private $email;
    private $birthDate;
    private $appartment;
    private $building;




    public function __construct($id,$firstName,$lastName,$telephone,$email,$birthDate,$appartment=false, $building){

        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->telephone = $telephone;
        $this ->email = $email;
        $this ->birthDate=$birthDate;
        $this ->appartment =$appartment;
        $this->building=$building;


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