<?php


class Communication
{
    private $id;
    private $title;
    private $message;




    public function __construct($id,$title,$message){

        $this->id = $id;
        $this->title = $title;
        $this->message = $message;

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