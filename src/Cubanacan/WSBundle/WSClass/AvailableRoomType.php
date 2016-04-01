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
 * Description of BookedRoom
 *
 * @author obretau
 */
class AvailableRoomType extends EntityName {
    
    /**
     * @var integer $adults
     * @Type("array<Cubanacan\WSBundle\WSClass\MealPlanDetails>")
     * @SerializedName("mealPlans") 
     */
    protected $mealPlans;
    /**
     * @var integer $adults
     * @Type("array<Cubanacan\WSBundle\WSClass\OptionalAmenityDetails>")
     * @SerializedName("optionalAmenities") 
     */
    protected $optionalAmenities;
    /**
     * @var string $code
     * @Type("string")
     */
    protected $code;
    /**
     * @var float $price
     * @Type("float")
     */
    protected $price;
    /**
     * @var integer $availability
     * @Type("integer")
     */
    protected $availability;
    /**
     * @var integer $currencyId
     * @Type("integer")
     * @SerializedName("currencyId") 
     */
    protected $currencyId;
    /**
     * @var string $currencyName
     * @Type("string")
     * @SerializedName("currencyName")
     */
    protected $currencyName;
    /**
     * @var $optionalAmenitiesPrices
     * @Type("array<integer, float>")
     * @SerializedName("optionalAmenitiesPrices") 
     */
    protected $optionalAmenitiesPrices;
    /**
     * @var $mealPlansPrices
     * @Type("array<integer, float>")
     * @SerializedName("mealPlansPrices") 
     */
    protected $mealPlansPrices;
    
    public function getMealPlans() {
        return $this->mealPlans;
    }

    public function getOptionalAmenities() {
        return $this->optionalAmenities;
    }

    public function getCode() {
        return $this->code;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function getCurrencyId() {
        return $this->currencyId;
    }

    public function getCurrencyName() {
        return $this->currencyName;
    }

    public function getOptionalAmenitiesPrices() {
        return $this->optionalAmenitiesPrices;
    }

    public function getMealPlansPrices() {
        return $this->mealPlansPrices;
    }

    public function setMealPlans($mealPlans) {
        $this->mealPlans = $mealPlans;
        return $this;
    }

    public function setOptionalAmenities($optionalAmenities) {
        $this->optionalAmenities = $optionalAmenities;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setAvailability($availability) {
        $this->availability = $availability;
        return $this;
    }

    public function setCurrencyId($currencyId) {
        $this->currencyId = $currencyId;
        return $this;
    }

    public function setCurrencyName($currencyName) {
        $this->currencyName = $currencyName;
        return $this;
    }

    public function setOptionalAmenitiesPrices($optionalAmenitiesPrices) {
        $this->optionalAmenitiesPrices = $optionalAmenitiesPrices;
        return $this;
    }

    public function setMealPlansPrices($mealPlansPrices) {
        $this->mealPlansPrices = $mealPlansPrices;
        return $this;
    }


}
