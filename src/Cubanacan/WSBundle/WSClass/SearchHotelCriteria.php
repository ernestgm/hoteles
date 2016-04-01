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
 * Description of SearchHotelCriteria
 *
 * @author obretau
 */
class SearchHotelCriteria {
    
    /**
     * @Type("integer")
     */
    protected $nights;
    /**
     * @Type("string")
     * @SerializedName("resortName")
     */
    protected $resortName;
    /**
     * @Type("integer")
     * @SerializedName("locationId")
     */
    protected $locationId;
    /**
     * @Type("DateTime<'Y-m-d'>")
     * @SerializedName("checkInDate")
     */
    protected $checkInDate;
    /**
     * @var categories
     * @Type("string")
     */
    protected $categories;
    /**
     * @var array allocation
     * @Type("Cubanacan\WSBundle\WSClass\ArrayRoomAllocation")
     */
    protected $allocation;
    
    public function getNights() {
        return $this->nights;
    }

    public function getResortName() {
        return $this->resortName;
    }

    public function getLocationId() {
        return $this->locationId;
    }

    public function getCheckInDate() {
        return $this->checkInDate;
    }

    public function getCategories() {
        return $this->categories;
    }

    public function getAllocation() {
        return $this->allocation;
    }

    public function setNights($nights) {
        $this->nights = $nights;
        return $this;
    }

    public function setResortName($resortName) {
        $this->resortName = $resortName;
        return $this;
    }

    public function setLocationId($locationId) {
        $this->locationId = $locationId;
        return $this;
    }

    public function setCheckInDate($checkInDate) {
        $this->checkInDate = $checkInDate;
        return $this;
    }

    public function setCategories($categories) {
        $this->categories = $categories;
        return $this;
    }

    public function setAllocation($allocation) {
        $this->allocation = $allocation;
        return $this;
    }


}
