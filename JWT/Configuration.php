<?php

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

namespace Erdal\Library\JWT;

class Configuration {


    protected static array $config = [

        'jwt_password'=>'0D43710170354046EED21564F7D072BE54B7F64B4D552C49F3F52089230CF679A41FFCE9E3919E002F94AC1D19D00459C9659851D2CEF4AFD52AAFC9823AFC2E',

        'header'=>[

                    'alg'=>'SHA512',

                    'typ'=>'jwt'

            ],

        'payload'=>[
        
            'static'=>true
      
            ]

    ];


    public function setConfiguration($key,$val):Configuration
    {

        self::$config['payload'][$key]=$val;

        return $this;

    }
    
}