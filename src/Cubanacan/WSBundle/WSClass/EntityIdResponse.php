<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Description of Object
 *
 * @author obretau
 */
class EntityIdResponse extends EntityResponse {
   
    /**
     * @var integer $id
     * @Type("integer")
     */
    protected $id;
    
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
