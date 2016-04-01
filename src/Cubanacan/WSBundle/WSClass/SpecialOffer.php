<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of SpecialOffer
 *
 * @author obretau
 */
class SpecialOffer extends EntityName{
    /**
     * @var array roomTypes
     *
     */
    private $roomTypes;
    
    private $lastMinute;
    
    private $amount;
    
    public function getRoomTypes() {
        return $this->roomTypes;
    }

    public function getLastMinute() {
        return $this->lastMinute;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setRoomTypes($roomTypes) {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    public function setLastMinute($lastMinute) {
        $this->lastMinute = $lastMinute;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }


}
