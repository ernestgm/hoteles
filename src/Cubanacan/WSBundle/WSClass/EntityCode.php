<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Code of Object
 *
 * @author obretau
 */
class EntityCode extends Entity{
   
    /**
     * @var String $code
     * @Type("string")
     */
    protected $code;
    
    /**
     * Set code
     *
     * @return String 
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    /**
     * Get code
     *
     * @return String 
     */
    public function getCode()
    {
        return $this->code;
    }    
}
