<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayIdValue {
    
    /**
     * @var array $idValue
     * @Type("array<Cubanacan\WSBundle\WSClass\IdValue>")
     * @SerializedName("idValue") 
     */
    protected $idValue;
    
    public function getInt() {
        return $this->int;
    }

    public function setInt($int) {
        $this->int = $int;
        return $this;
    }


   
}
