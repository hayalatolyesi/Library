<?php
/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
namespace Erdal\Library\JWT;

use Erdal\Library\Base64;

class TokenCreate extends Configuration{

    public static function make():string{

        $header             = serialize(self::$config['header']);

        $base64Header       = Base64::encode($header);

        $payload            = serialize(self::$config['payload']);

        $base64Payload      = Base64::encode($payload);

        $partOne            = $base64Header.".".$base64Payload;
        
        $partOneBase64      = \base64_encode($partOne);

        $signature          = hash_hmac(self::$config['header']['alg'],$partOneBase64,self::$config['jwt_password']);

        $base64Signature    = Base64::encode($signature);

        $JWT                = $partOne.".".$base64Signature;

        return $JWT;
        
    }


}