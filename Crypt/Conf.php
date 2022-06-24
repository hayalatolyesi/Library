<?php

namespace Erdal\Library\Crypt;
/*
## PWD KEYS -- !!! DON'T CHANGE THIS KEYS !!!
DEFINE ('SECRET_KEY', '$$EIns34Tein# key it');
DEFINE ('SECRET_IV', '!MammamIa# Call me');
*/
class Conf {


    private static array $config = [

     
        'key'=> '$$EIns34Tein# key it',

        'iv'=>'!MammamIa# Call me',

        'method'=>'AES-256-CBC',

    ];

    protected static function getKey(){

        return hash('sha256',self::$config['key']);

    }

    protected static function getIv(){

        return substr(hash('sha256',self::$config['iv']),0,16);
        
    }
    
    protected static function getMethod(){

        return self::$config['method'];

    }

}