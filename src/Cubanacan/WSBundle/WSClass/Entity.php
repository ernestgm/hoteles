<?php

namespace Cubanacan\WSBundle\WSClass;
use JMS\Serializer\Annotation\Type;
/**
 * Description of Object
 *
 * @author obretau
 */
class Entity {
   
    /**
     * @var integer $id
     * @Type("integer")
     */
    protected $id;
    
    function __construct($id) {
        $this->id = $id;
    }

    /**
     * Set id
     *
     * @return integer 
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
}
