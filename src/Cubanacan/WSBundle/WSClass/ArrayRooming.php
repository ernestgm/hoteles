<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author David
 */
class ArrayRooming {
    
    /**
     * @var array Rooming $rooming
     * @Type("array<Cubanacan\WSBundle\WSClass\Rooming>")
     * 
     * @SerializedName("rooming")
     */
    protected $rooming;
    
    public function getRooming() {
        return $this->rooming;
    }

    public function setRooming($rooming) {
        $this->rooming = $rooming;
        return $this;
    }


   
}
