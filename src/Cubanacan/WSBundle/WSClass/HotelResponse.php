<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;
use JMS\Serializer\Annotation\Type;

/**
 * Description of HotelResponse
 *
 * @author obretau
 */
class HotelResponse extends EntityResponse{
    
    /**
     * @var array $hotel
     *  
     * @Type("Cubanacan\WSBundle\WSClass\HotelDetails")
     */
    protected $hotel;
    
    public function getHotel() {
        return $this->hotel;
    }

    public function setHotel($hotel) {
        $this->hotel = $hotel;
        return $this;
    }


}
