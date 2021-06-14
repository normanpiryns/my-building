<?php


class SyndicDAO extends AbstractDAO
{
    public function __construct () {

        parent::__construct('syndics');
    }



    function create ($result) {
        return new Syndic(
            $result['id'],
            $result['name'],
            $result['email'],
            $result['password']

        );
    }


    function deepCreate ($result) {
        return new Syndic(
            $result['id'],
            $result['name'],
            $result['email'],
            $result['password']

        );
    }

}