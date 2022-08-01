<?php

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : 01.03.2022
**/

namespace Erdal\Library\Crypt;

class Conf {


    /*
    *
    *   @property static array $config  
    *
    */

    private static array $config = [

     
        'key'=> '$$EIns34Tein# key it',

        'iv'=>'!MammamIa# Call me',

        'method'=>'AES-256-CBC',

    ];


    /*
    *
    *   @protected getKey
    *
    *   @param null   
    *
    *   @return String
    *
    */

    protected function getKey():String
    {

        return hash('sha256',self::$config['key']);

    }


    /*
    *
    *   @protected getIv
    *
    *   @param null   
    *
    *   @return String
    *
    */

    protected function getIv():String
    {

        return substr(hash('sha256',self::$config['iv']),0,16);
        
    }
    

    /*
    *
    *   @protected getMethod
    *
    *   @param null   
    *
    *   @return String
    *
    */

    protected function getMethod():String
    {

        return self::$config['method'];

    }


    /*
    *
    *   @public setKey
    *
    *   @param String $key   
    *
    *   @return void
    *
    */

    public function setKey(String $key):void
    {

       self::$config['key'] = $key;

    }    


    /*
    *
    *   @public setIv
    *
    *   @param String $iv   
    *
    *   @return void
    *
    */

    public function setIv(String $iv):void
    {

       self::$config['iv'] = $iv;

    }  
    

    /*
    *
    *   @public setMethod
    *
    *   @param String $method   
    *
    *   @return void
    *
    */

    public function setMethod(String $method):void
    {

       self::$config['method'] = $method;

    }      

}