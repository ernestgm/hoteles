<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author David
 */
class ArrayBookedRoomDetails {
    
    /**
     * @var array BookedRoomDetails $bookedRoomDetails
     * @Type("array<Cubanacan\WSBundle\WSClass\BookedRoomDetails>")
     * 
     * @SerializedName("bookedRoomDetails")
     */
    protected $bookedRoomDetails;
    
    public function getBookedRoomDetails() {
        return $this->bookedRoomDetails;
    }

    public function setBookedRoomDetails($bookedRoomDetails) {
        $this->bookedRoomDetails = $bookedRoomDetails;
        return $this;
    }


   
}
