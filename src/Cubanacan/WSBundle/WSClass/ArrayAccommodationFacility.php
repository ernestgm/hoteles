<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayAccommodationFacility {
    
    /**
     * @var array facilities     
     * @Type("array<Cubanacan\WSBundle\WSClass\AccommodationFacility>")
     * 
     * @SerializedName("accommodationFacility")
     */
    protected $accommodationFacility;
    
    public function getAccommodationFacility() {
        return $this->accommodationFacility;
    }

    public function setAccommodationFacility($accommodationFacility) {
        $this->accommodationFacility = $accommodationFacility;
        return $this;
    }


   
}
