<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayHotelServices {
    
    /**
     * @var array HotelService hotelServices
     * @Type("array<Cubanacan\WSBundle\WSClass\HotelService>")
     * 
     * @SerializedName("hotelServices")
     */
    protected $hotelServices;
    
    public function getHotelServices() {
        return $this->hotelServices;
    }

    public function setHotelServices($hotelServices) {
        $this->hotelServices = $hotelServices;
        return $this;
    }
   
}
