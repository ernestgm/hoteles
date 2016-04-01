<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of HotelResult
 *
 * @author obretau
 */
class HotelResult {
    
    protected $hotelId;
    
    protected $name;
    
    protected $phone;
    
    protected $checkInTime;
    
    protected $checkOutTime;
    /**
     * @var GeoLocation $location
     *
     */
    protected $location;
    /**
     * @var Address address
     *
     */
    protected $address;
    /**
     * @var HotelCategoryEnum $hotel
     *
     */
    protected $category;
    /**
     * @var array facilities
     *
     */
    protected $facilities;
    /**
     * @var array images
     *
     */
    protected $images;
    /**
     * @var array rooms
     *
     */
    protected $rooms;
    
    protected $allInclusive;
    
    protected $code;
    
    
    public function getHotelId() {
        return $this->hotelId;
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getCheckInTime() {
        return $this->checkInTime;
    }

    public function getCheckOutTime() {
        return $this->checkOutTime;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getFacilities() {
        return $this->facilities;
    }

    public function getImages() {
        return $this->images;
    }

    public function getRooms() {
        return $this->rooms;
    }

    public function getAllInclusive() {
        return $this->allInclusive;
    }

    public function getCode() {
        return $this->code;
    }

    public function setHotelId($hotelId) {
        $this->hotelId = $hotelId;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
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

    public function setLocation(GeoLocation $location) {
        $this->location = $location;
        return $this;
    }

    public function setAddress(Address $address) {
        $this->address = $address;
        return $this;
    }

    public function setCategory(HotelCategoryEnum $category) {
        $this->category = $category;
        return $this;
    }

    public function setFacilities($facilities) {
        $this->facilities = $facilities;
        return $this;
    }

    public function setImages($images) {
        $this->images = $images;
        return $this;
    }

    public function setRooms($rooms) {
        $this->rooms = $rooms;
        return $this;
    }

    public function setAllInclusive($allInclusive) {
        $this->allInclusive = $allInclusive;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }


        
}
