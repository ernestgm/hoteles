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
 * Description of RoomReservationResponse
 *
 * @author obretau
 */
class RoomReservationResponse extends EntityIdResponse{
    
    protected $referenceCode;

    /**
     * @Type("double")
     * @SerializedName("price")
     */
    protected $price;
    
    public function getReferenceCode() {
        return $this->referenceCode;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setReferenceCode($referenceCode) {
        $this->referenceCode = $referenceCode;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }


}
