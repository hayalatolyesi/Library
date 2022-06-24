<?php

namespace Erdal\Library\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class Warning implements IResponder{
    
    /*
    * 
    * For Response Messages
    *
    * $message string
    * 
    */
    public string $message;
    
    /*
    * 
    * This Object, Identity Name
    *
    * CONST STATUS string
    * 
    */      
    CONST STATUS ="warning";
    
    /*
    *
    *  @param string $message 
    *
    *  @return void
    *
    */
    public function set(String $message):void{
        
        $this->message  =$message;

        
    }
    
}