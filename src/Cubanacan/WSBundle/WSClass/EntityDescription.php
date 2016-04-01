<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Description of Object
 *
 * @author obretau
 */
class EntityDescription extends Entity{
   
    /**
     * @var String $description
     * @Type("string")
     */
    protected $description;
    
    /**
     * Set description
     *
     * @return String 
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * Get description
     *
     * @return String 
     */
    public function getDescription()
    {
        return $this->description;
    }    
}
