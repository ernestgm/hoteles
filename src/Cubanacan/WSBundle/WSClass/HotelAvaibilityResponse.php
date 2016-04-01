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
 * Description of CountryResponse
 *
 * @author obretau
 */
class HotelAvaibilityResponse extends EntityResponse{
    
    /**
     * @Type("string")
     * @SerializedName("currencyName")
     */
    protected $currencyName;    
    /**
     * @Type("array<integer, Cubanacan\WSBundle\WSClass\ArrayImages>")
     * @SerializedName("hotelImage")
     */
    protected $hotelImage;
    /**
     * @Type("array<integer, array<Cubanacan\WSBundle\WSClass\IdValue>>")
     * @SerializedName("roomTypesAmenities")
     */
    protected $roomTypesAmenities;
    /**
     * @Type("array<integer, array<Cubanacan\WSBundle\WSClass\IdValue>>")
     * @SerializedName("hotelAmenitiesPerHotel")
     */
    protected $hotelAmenitiesPerHotel;
    /**
     * @Type("array<Cubanacan\WSBundle\WSClass\HotelAvailabilitySearchResult>")
     * @SerializedName("hotelsAvaibility")
     */
    protected $hotelsAvaibility;
    
    public function getCurrencyName() {
        return $this->currencyName;
    }

    public function setCurrencyName($currencyName) {
        $this->currencyName = $currencyName;
        return $this;
    }
    
    public function getHotelImage() {
        return $this->hotelImage;
    }

    public function setHotelImage($hotelImage) {
        $this->hotelImage = $hotelImage;
        return $this;
    }
    public function getRoomTypesAmenities() {
        return $this->roomTypesAmenities;
    }

    public function setRoomTypesAmenities($roomTypesAmenities) {
        $this->roomTypesAmenities = $roomTypesAmenities;
        return $this;
    }
    public function getHotelAmenitiesPerHotel() {
        return $this->hotelAmenitiesPerHotel;
    }

    public function setHotelAmenitiesPerHotel($hotelAmenitiesPerHotel) {
        $this->hotelAmenitiesPerHotel = $hotelAmenitiesPerHotel;
        return $this;
    }

    public function getHotelsAvaibility() {
        return $this->hotelsAvaibility;
    }

    public function setHotelsAvaibility($hotelsAvaibility) {
        $this->hotelsAvaibility = $hotelsAvaibility;
        return $this;
    }
}
