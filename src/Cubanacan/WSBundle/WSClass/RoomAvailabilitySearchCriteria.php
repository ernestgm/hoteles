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
 * Description of RoomAllocation
 *
 * @author obretau
 */
class RoomAvailabilitySearchCriteria {
    
    /**
     * @var $adultOccupancy
     * @Type("integer")
     * @SerializedName("adultOccupancy") 
     */
    protected $adultOccupancy;
    /**
     * @var $childrenAges
     * @Type("array<integer>")
     * @SerializedName("childrenAges") 
     */
    protected $childrenAges;
    /**
     * @var $childOccupancy
     * @Type("integer")
     * @SerializedName("childOccupancy") 
     */
    protected $childOccupancy;
    /**
     * @var $quantity
     * @Type("integer")
     * @SerializedName("quantity") 
     */
    protected $quantity;  
    
    public function getAdultOccupancy() {
        return $this->adultOccupancy;
    }

    public function getChildrenAges() {
        return $this->childrenAges;
    }

    public function getChildOccupancy() {
        return $this->childOccupancy;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setAdultOccupancy($adultOccupancy) {
        $this->adultOccupancy = $adultOccupancy;
        return $this;
    }

    public function setChildrenAges($childrenAges) {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    public function setChildOccupancy($childOccupancy) {
        $this->childOccupancy = $childOccupancy;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }


    
}
