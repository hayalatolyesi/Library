<?php
namespace Erdal\Library\Crypt;

class Encrypt extends Conf{

    public static function make(String $string):String{

        $output = openssl_encrypt($string, self::getMethod(), self::getKey(), false, self::getIv());

        return base64_encode($output);

    }

}
