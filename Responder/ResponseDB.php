<?php

namespace Erdal\Library\Responder;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/
class ResponseDB {
    
    /*
     * 
     * For Message Objects Storage
     *
     * $messageObject array
     * 
     */

    private array $messageObject = array();
    

    /*
     * 
     * For Message Object Custom Index Number
     *
     * $i int
     * 
     */    
    private int $i=0;
    

    /*
    *
    *  @param IResponder $response (Not null)
    *
    *
    *  @return Responder\ResponseDB
    *
    */
    public function setResponse(IResponder $response):ResponseDB{
        
        $this->messageObject[$response::STATUS][] = $response;
        
        return $this;
        
    }
    

    /*
    *
    *  @return messageObject Array
    *
    */    
    public function getAll():array{
        
        return $this->messageObject;
        
    }
    
}