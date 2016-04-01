<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayHotelOptionalServices {
    
    /**
     * @var array OptionalService $optionalService
     * 
     * @Type("array<Cubanacan\WSBundle\WSClass\OptionalService>") 
     * @SerializedName("optionalService")
     */
    protected $optionalService;
    
    public function getOptionalService() {
        return $this->optionalService;
    }

    public function setOptionalService($optionalService) {
        $this->optionalService = $optionalService;
        return $this;
    }


}
