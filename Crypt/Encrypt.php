<?php

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : 01.03.2022
**/

namespace Erdal\Library\Crypt;

class Encrypt extends Conf{
    /*
    *
    *   @ENCRYPT CLASS
    *
    *   ---- For make to crypted  data ----
    *
    *   @public make
    *
    *   @param null   
    *
    *   @return String
    *
    */
    public static function make(String $string):String
    {

        $output = openssl_encrypt($string, self::getMethod(), self::getKey(), false, self::getIv());

        return base64_encode($output);

    }


    /*
    *
    *   @ENCRYPT CLASS
    *
    *   ---- For make to crypted  data ----
    *
    *   @public make
    *
    *   @param null   
    *
    *   @return String
    *
    */
    public static function makePure(String $string):String
    {

        $output = openssl_encrypt($string, self::getMethod(), self::getKey(), false, self::getIv());

        return $output;

    }    

}
