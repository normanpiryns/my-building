<?php


class User
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $session_token;
    private $session_time;




    public function __construct($id,$username,$password,$email,$session_token=false,$session_time=false){

        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->session_token = $session_token;
        $this->session_time = $session_time;



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