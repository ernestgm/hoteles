<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of HotelDetails
 *
 * @author obretau
 * 
 */
class HotelDetails {

    /**
     * @Type("boolean")
     */
    protected $active;
    /**
     * @Type("string")
     */
    protected $code;
    /**
     * @Type("string")
     */
    protected $name;
    /**
     * @Type("string")
     */
    protected $brand;
    /**
     * @Type("string")
     */
    protected $phone;
    /**
     * @Type("string")
     */
    protected $fax;
    /**
     * @var Address adress
     * @Type("Cubanacan\WSBundle\WSClass\Address")
     */
    protected $adress;
    /**
     * @Type("integer")
     * @SerializedName("roomCount")
     */
    protected $roomCount;
    /**
     * @Type("string")
     * @SerializedName("checkIntime")
     */
    protected $checkIntime;
    /**
     * @Type("string")
     * @SerializedName("checkOutTime")
     */
    protected $checkOutTime;
    /**
     * @Type("boolean")
     * @SerializedName("allInclusive")
     */
    protected $allInclusive;
    /**
     * @Type("integer")
     */
    protected $priority;
    /**
     * @var Location location
     * @Type("Cubanacan\WSBundle\WSClass\Location")
     */
    protected $location;
    /**
     * @var HotelCategoryEnum categoryEnum
     * @Type("string")
     * @SerializedName("categoryEnum")
     */
    protected $categoryEnum;
    /**
     * @var array facilities     
     * @Type("Cubanacan\WSBundle\WSClass\ArrayAccommodationFacility")
     */
    protected $facilities;
    /**
     * @var array images
     * @Type("Cubanacan\WSBundle\WSClass\ArrayImages")
     */
    protected $images;
    /**
     * @Type("integer")
     * @SerializedName("hotelId")
     */
    protected $hotelId;
    
    public function getActive() {
        return $this->active;
    }

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getFax() {
        return $this->fax;
    }

    public function getAdress() {
        return $this->adress;
    }

    public function getRoomCount() {
        return $this->roomCount;
    }

    public function getCheckIntime() {
        return $this->checkIntime;
    }

    public function getCheckOutTime() {
        return $this->checkOutTime;
    }

    public function getAllInclusive() {
        return $this->allInclusive;
    }

    public function getPriority() {
        return $this->priority;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getCategoryEnum() {
        return $this->categoryEnum;
    }

    public function getFacilities() {
        return $this->facilities;
    }

    public function getImages() {
        return $this->images;
    }

    public function getHotelId() {
        return $this->hotelId;
    }

    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    public function setAdress(Address $adress) {
        $this->adress = $adress;
        return $this;
    }

    public function setRoomCount($roomCount) {
        $this->roomCount = $roomCount;
        return $this;
    }

    public function setCheckIntime($checkIntime) {
        $this->checkIntime = $checkIntime;
        return $this;
    }

    public function setCheckOutTime($checkOutTime) {
        $this->checkOutTime = $checkOutTime;
        return $this;
    }

    public function setAllInclusive($allInclusive) {
        $this->allInclusive = $allInclusive;
        return $this;
    }

    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    public function setLocation(Location $location) {
        $this->location = $location;
        return $this;
    }

    public function setCategoryEnum(HotelCategoryEnum $categoryEnum) {
        $this->categoryEnum = $categoryEnum;
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

    public function setHotelId($hotelId) {
        $this->hotelId = $hotelId;
        return $this;
    }


}
