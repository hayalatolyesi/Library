<?php

namespace Erdal\Library\Responder;

use Exception;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

class Error implements IResponder{
    
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
     * For message code number
     *
     * $code int
     * 
     */

    public int $code;
    
    /*
     * 
     * For PHP Exception Object
     *
     * $exception string
     * 
     */

    public \Exception $exception;
    

    /*
     * 
     * This Object, Identity Name
     *
     * CONST STATUS string
     * 
     */    

    CONST STATUS ="error";
    
    /*
    *
    *  @param string $message (Not null)
    *
    *  @param int $customCode (Not null)
    *
    *  @param \Exception $exception (nullable)
    *
    *  @return void
    *
    */

    public function set(string $message,int $customCode,\Exception $exception=null):void{
        
        $this->message      = $message;
        
        $this->code         = $customCode;
        
        $this->exception    = $exception ?? new Exception();
        
    }
    
}