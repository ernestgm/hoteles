<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of OptionalAmenity
 *
 * @author obretau
 */
class OptionalAmenity {
    
    /**
     * @var array $prices
     *
     */
    protected $prices;
    
    protected $optionalAmenityId;
    
    public function getPrices() {
        return $this->prices;
    }

    public function getOptionalAmenityId() {
        return $this->optionalAmenityId;
    }

    public function setPrices($prices) {
        $this->prices = $prices;
        return $this;
    }

    public function setOptionalAmenityId($optionalAmenityId) {
        $this->optionalAmenityId = $optionalAmenityId;
        return $this;
    }


}
