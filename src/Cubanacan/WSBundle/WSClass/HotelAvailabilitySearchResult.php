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
 * Description of HotelAmenity
 *
 * @author obretau
 */
class HotelAvailabilitySearchResult extends EntityName{
    
    /**
     * @var $availableRoomTypes
     * @Type("array<Cubanacan\WSBundle\WSClass\RoomAvailabilitySearchResult>")
     * @SerializedName("roomAvailabilitySearchResults") 
     */
    protected $roomAvailabilitySearchResults;
    
    /**
     * @var $code
     * @Type("string")
     */
    protected $code;
    /**
     * @var $address
     * @Type("string")
     */
    protected $address;
    /**
     * @var $category
     * @Type("string")
     */
    protected $category;
    /**
     * @var $locationName
     * @Type("string")
     * @SerializedName("locationName") 
     */
    protected $locationName;
    /**
     * @var $locationId
     * @Type("integer")
     * @SerializedName("locationId") 
     */
    protected $locationId;
    /**
     * @var $hasAvailability
     * @Type("boolean")
     * @SerializedName("hasAvailability") 
     */
    protected $hasAvailability;
    /**
     * @var $allInclusive
     * @Type("boolean")
     * @SerializedName("allInclusive") 
     */
    protected $allInclusive;
    /**
     * @var $hasSpecialOffers
     * @Type("boolean")
     * @SerializedName("hasSpecialOffers") 
     */
    protected $hasSpecialOffers;
    /**
     * @var $minimumPrice
     * @Type("float")
     * @SerializedName("minimumPrice")
     */
    protected $minimumPrice;
    /**
     * @var $checkInTime
     * @Type("string")
     * @SerializedName("checkInTime")
     */
    protected $checkInTime;
    /**
     * @var $checkOutTime
     * @Type("string")
     * @SerializedName("checkOutTime")
     */
    protected $checkOutTime;
    /**
     * @var $phone
     * @Type("string")
     */
    protected $phone;
    
    public function getRoomAvailabilitySearchResults() {
        return $this->roomAvailabilitySearchResults;
    }

    public function getCode() {
        return $this->code;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getLocationName() {
        return $this->locationName;
    }

    public function getLocationId() {
        return $this->locationId;
    }

    public function getHasAvailability() {
        return $this->hasAvailability;
    }

    public function getAllInclusive() {
        return $this->allInclusive;
    }

    public function getHasSpecialOffers() {
        return $this->hasSpecialOffers;
    }

    public function getMinimumPrice() {
        return $this->minimumPrice;
    }

    public function getCheckInTime() {
        return $this->checkInTime;
    }

    public function getCheckOutTime() {
        return $this->checkOutTime;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setRoomAvailabilitySearchResults($roomAvailabilitySearchResults) {
        $this->roomAvailabilitySearchResults = $roomAvailabilitySearchResults;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function setLocationName($locationName) {
        $this->locationName = $locationName;
        return $this;
    }

    public function setLocationId($locationId) {
        $this->locationId = $locationId;
        return $this;
    }

    public function setHasAvailability($hasAvailability) {
        $this->hasAvailability = $hasAvailability;
        return $this;
    }

    public function setAllInclusive($allInclusive) {
        $this->allInclusive = $allInclusive;
        return $this;
    }

    public function setHasSpecialOffers($hasSpecialOffers) {
        $this->hasSpecialOffers = $hasSpecialOffers;
        return $this;
    }

    public function setMinimumPrice($minimumPrice) {
        $this->minimumPrice = $minimumPrice;
        return $this;
    }

    public function setCheckInTime($checkInTime) {
        $this->checkInTime = $checkInTime;
        return $this;
    }

    public function setCheckOutTime($checkOutTime) {
        $this->checkOutTime = $checkOutTime;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }


}
