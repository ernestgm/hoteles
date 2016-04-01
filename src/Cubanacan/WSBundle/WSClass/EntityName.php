<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Description of Object
 *
 * @author obretau
 */
class EntityName extends Entity{
   
    /**
     * @var String $name
     * @Type("string")
     */
    protected $name;
    
    function __construct($name, $id = null) {
        parent::__construct($id);
        $this->name = $name;
    }

    /**
     * Set name
     *
     * @return String 
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * Get name
     *
     * @return String 
     */
    public function getName()
    {
        return $this->name;
    }    
}
