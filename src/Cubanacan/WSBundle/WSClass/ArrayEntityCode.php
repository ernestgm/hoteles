<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayEntityCode {
    
    /**
     * @var array $entityCode
     * @Type("array<Cubanacan\WSBundle\WSClass\EntityCode>")
     * @SerializedName("entityCode") 
     */
    protected $entityCode;
    public function getEntityCode() {
        return $this->entityCode;
    }

    public function setEntityCode($entityCode) {
        $this->entityCode = $entityCode;
        return $this;
    }


}
