<?php


class Resident
{
    private $id;
    private $firstName;
    private $lastName;
    private $telephone;
    private $email;
    private $password;
    private $birthDate;
    private $appartment;
    private $Session_token;
    private $Session_time;



    public function __construct($id,$firstName,$lastName,$telephone,$email,$password,$birthDate,$appartment=false,
                                $Session_token=false, $Session_time=false){

        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->telephone = $telephone;
        $this ->email = $email;
        $this ->password = $password;
        $this ->birthDate=$birthDate;
        $this ->appartment =$appartment;
        $this ->Session_token =$Session_token;
        $this ->Session_time =$Session_time;

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