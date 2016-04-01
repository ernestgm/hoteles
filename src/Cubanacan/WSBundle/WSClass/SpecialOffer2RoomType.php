<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of SpecialOffer2RoomType
 *
 * @author obretau
 */
class SpecialOffer2RoomType extends Entity{
    
    protected $roomTypeId;
    
    protected $roomTypeName;
    
    protected $specialOfferId;
    
    protected $hotelId;
    
    protected $hotelName;
    
    public function getRoomTypeId() {
        return $this->roomTypeId;
    }

    public function getRoomTypeName() {
        return $this->roomTypeName;
    }

    public function getSpecialOfferId() {
        return $this->specialOfferId;
    }

    public function getHotelId() {
        return $this->hotelId;
    }

    public function getHotelName() {
        return $this->hotelName;
    }

    public function setRoomTypeId($roomTypeId) {
        $this->roomTypeId = $roomTypeId;
        return $this;
    }

    public function setRoomTypeName($roomTypeName) {
        $this->roomTypeName = $roomTypeName;
        return $this;
    }

    public function setSpecialOfferId($specialOfferId) {
        $this->specialOfferId = $specialOfferId;
        return $this;
    }

    public function setHotelId($hotelId) {
        $this->hotelId = $hotelId;
        return $this;
    }

    public function setHotelName($hotelName) {
        $this->hotelName = $hotelName;
        return $this;
    }


}
