<?php

namespace Erdal\Library\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Data implements IResponder{
    
    /*
    * 
    * For Response Messages
    *
    * $message string
    * 
    */    
    public $data;
    
    /*
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */    
    CONST STATUS ="data";
    
    /*
    *
    *  @param string $message 
    *
    *  @return void
    *
    */

    public function set(String $data):void{
        
        $this->data  =$data;
        
    }
    
}