<?php

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : 01.03.2022
**/

namespace Erdal\Library\Crypt;

class Decrypt extends Conf{


    /*
    *
    *   @DECRYPT CLASS
    *
    *   ---- For make to decrypted  data ----
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

        return openssl_decrypt(base64_decode($string),self::getMethod(), self::getKey(), false, self::getIv());

    }

    /*
    *
    *   @DECRYPT CLASS
    *
    *   ---- For make to decrypted  data ----
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

        return openssl_decrypt($string,self::getMethod(), self::getKey(), false, self::getIv());

    }    

}