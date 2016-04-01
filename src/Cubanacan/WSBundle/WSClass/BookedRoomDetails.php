<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Description of BookedRoomDetails
 *
 * @author obretau
 */
class BookedRoomDetails {
    
        
    protected $hotelName;
    protected $hotelId;
    /**
     * @var integer $nights
     * @Type("integer")
     *
     * @SerializedName("nights")
     */
    protected $nights;
    /**
     * @var integer $adults
     * @Type("integer")
     *
     * @SerializedName("adults")
     */
    protected $adults;
    /**
     * @var array childrenAges
     *
     */
    protected $childrenAges;
    protected $roomTypeId;
    protected $roomTypeName;
    protected $mealPlanId;
    protected $mealPlanName;
    /**
     * @var array Rooming $roomings
     * @Type("Cubanacan\WSBundle\WSClass\ArrayRooming")
     *
     * @SerializedName("roomings")
     */
    protected $roomings;
    protected $roomPrice;
    protected $totalRoomPrice;
    /**
     * @var array optionalServices
     *
     */
    protected $optionalServices;
    protected $allInclusive;
    
    public function getHotelName() {
        return $this->hotelName;
    }

    public function getHotelId() {
        return $this->hotelId;
    }

    public function getNights() {
        return $this->nights;
    }

    public function getAdults() {
        return $this->adults;
    }

    public function getChildrenAges() {
        return $this->childrenAges;
    }

    public function getRoomTypeId() {
        return $this->roomTypeId;
    }

    public function getRoomTypeName() {
        return $this->roomTypeName;
    }

    public function getMealPlanId() {
        return $this->mealPlanId;
    }

    public function getMealPlanName() {
        return $this->mealPlanName;
    }

    public function getRoomings() {
        return $this->roomings;
    }

    public function getRoomPrice() {
        return $this->roomPrice;
    }

    public function getTotalRoomPrice() {
        return $this->totalRoomPrice;
    }

    public function getOptionalServices() {
        return $this->optionalServices;
    }

    public function getAllInclusive() {
        return $this->allInclusive;
    }

    public function setHotelName($hotelName) {
        $this->hotelName = $hotelName;
    }

    public function setHotelId($hotelId) {
        $this->hotelId = $hotelId;
    }

    public function setNights($nights) {
        $this->nights = $nights;
    }

    public function setAdults($adults) {
        $this->adults = $adults;
    }

    public function setChildrenAges($childrenAges) {
        $this->childrenAges = $childrenAges;
    }

    public function setRoomTypeId($roomTypeId) {
        $this->roomTypeId = $roomTypeId;
    }

    public function setRoomTypeName($roomTypeName) {
        $this->roomTypeName = $roomTypeName;
    }

    public function setMealPlanId($mealPlanId) {
        $this->mealPlanId = $mealPlanId;
    }

    public function setMealPlanName($mealPlanName) {
        $this->mealPlanName = $mealPlanName;
    }

    public function setRoomings($roomings) {
        $this->roomings = $roomings;
    }

    public function setRoomPrice($roomPrice) {
        $this->roomPrice = $roomPrice;
    }

    public function setTotalRoomPrice($totalRoomPrice) {
        $this->totalRoomPrice = $totalRoomPrice;
    }

    public function setOptionalServices($optionalServices) {
        $this->optionalServices = $optionalServices;
    }

    public function setAllInclusive($allInclusive) {
        $this->allInclusive = $allInclusive;
    }
}
