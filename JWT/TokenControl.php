<?php
/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
namespace Erdal\Library\JWT;

use Erdal\Library\Base64;

class TokenControl extends Configuration{

    public static function confirm(String $token):bool{

        $TokenParse         = new TokenParse();

        $TokenParse->explode($token);

        $base64Header       = $TokenParse->getBase64Header();

        $base64Payload      = $TokenParse->getBase64Payload();

        $base64Signature    = $TokenParse->getBase64Signature();

        $decodeSignature    = Base64::decode($base64Signature);

        //Token Decode Edildi. 

        //Yeniden Şifrelenmek için sarmalanıyor!

        $partOne            = $base64Header.".".$base64Payload;
        
        $partOneBase64      = \base64_encode($partOne);
        
        //Base64 Sınıfını encode işlemi burada kullanılamaz.

        //Burada ham encode kullanılmalıdır
        
        //Payload ve Header  Şifreleniyor
        $signature          = hash_hmac(self::$config['header']['alg'],$partOneBase64,self::$config['jwt_password']);

        //Şifrelenen kod ile önceden  kullanıcıya gönderilen şifrelenmiş kod aynı mı ?

        return $signature==$decodeSignature;

    }

}