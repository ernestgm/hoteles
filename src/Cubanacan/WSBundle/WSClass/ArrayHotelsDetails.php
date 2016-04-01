<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayHotelsDetails {
    
    /**
     * @var array HotelService hotelServices
     * @Type("array<Cubanacan\WSBundle\WSClass\HotelDetails>")
     * 
     * @SerializedName("hotelsDetails")
     */
    protected $hotelsDetails;
    
    public function getHotelsDetails() {
        return $this->hotelsDetails;
    }

    public function setHotelsDetails($hotelDetails) {
        $this->hotelsDetails = $hotelDetails;
        return $this;
    }
   
}
