<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomReservationUpdateResponse
 *
 * @author obretau
 */
class RoomReservationUpdateResponse extends EntityResponse{
    
    protected $resultPrice;
    
    public function getResultPrice() {
        return $this->resultPrice;
    }

    public function setResultPrice($resultPrice) {
        $this->resultPrice = $resultPrice;
        return $this;
    }
}
