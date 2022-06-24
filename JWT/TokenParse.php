<?php
/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
namespace Erdal\Library\JWT;

class TokenParse extends Configuration{

    private  array $explode; 


    public  function explode(String $token):array{

        $this->explode   = explode('.',$token);

        return $this->explode;

    }


    public  function getBase64Header():String{

        return $this->explode[0];

    }


    public  function getBase64Payload():String{

        return $this->explode[1];

    }


    public  function getBase64Signature():String{

        return $this->explode[2];

    }


    public  function getBase64Indicator():String{

        return $this->explode[3];

    }    

    
}