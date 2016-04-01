<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomResult
 *
 * @author obretau
 */
class RoomResult {
    protected $roomTypeId;
    
    protected $roomName;
    
    protected $availability;
    /**
     * @var array facilities
     *
     */
    protected $facilities;
    /**
     * @var array mealPlans
     *
     */
    protected $mealPlans;
    /**
     * @var array optionalServices
     *
     */
    protected $optionalServices;
    
    public function getRoomTypeId() {
        return $this->roomTypeId;
    }

    public function getRoomName() {
        return $this->roomName;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function getFacilities() {
        return $this->facilities;
    }

    public function getMealPlans() {
        return $this->mealPlans;
    }

    public function getOptionalServices() {
        return $this->optionalServices;
    }

    public function setRoomTypeId($roomTypeId) {
        $this->roomTypeId = $roomTypeId;
        return $this;
    }

    public function setRoomName($roomName) {
        $this->roomName = $roomName;
        return $this;
    }

    public function setAvailability($availability) {
        $this->availability = $availability;
        return $this;
    }

    public function setFacilities($facilities) {
        $this->facilities = $facilities;
        return $this;
    }

    public function setMealPlans($mealPlans) {
        $this->mealPlans = $mealPlans;
        return $this;
    }

    public function setOptionalServices($optionalServices) {
        $this->optionalServices = $optionalServices;
        return $this;
    }


}
