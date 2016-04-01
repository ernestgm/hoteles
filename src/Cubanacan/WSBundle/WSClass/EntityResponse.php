<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class EntityResponse{
   
    /**
     * @var String $operationMessage
     * @Type("string")
     * @SerializedName("operationMessage")
     */
    protected $operationMessage;
    
    /**
     * Set operationMessage
     *
     * @return String 
     */
    public function setOperationMessage($operationMessage)
    {
        $this->operationMessage = $operationMessage;
    }
    /**
     * Get operationMessage
     *
     * @return String 
     */
    public function getOperationMessage()
    {
        return $this->operationMessage;
    }    
    
    public function isOk()
    {
        return ($this->operationMessage == "OK");
    }
    
    public function getError()
    {
        return strstr($this->operationMessage, ' ', false);
    }
}
