<?php

namespace Erdal\Library;

class Base64{

    public static function encode($string){

        return str_replace(['+','/','='], ['-','_',''], base64_encode($string));

    }

    public static function decode($string){

        return base64_decode(str_replace(['-','_'], ['+','/'], $string));

    }

}