<?php
namespace Erdal\Library\Crypt;

class Decrypt extends Conf{

    public static function make(String $string):String{

        return openssl_decrypt(base64_decode($string),self::getMethod(), self::getKey(), false, self::getIv());

    }

}