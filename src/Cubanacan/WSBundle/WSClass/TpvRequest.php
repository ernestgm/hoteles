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
 * Description of TpvRequest
 *
 * @author Coperfield
 */
class TpvRequest {
    
    /**
     * @Type("string")
     * @SerializedName("opreservationCode")
     *
     */
    protected $reservationCode;

    /**
     * @Type("string")
     * @SerializedName("amount")
     *
     */
    protected $amount;

    /**
     * @Type("string")
     * @SerializedName("response")
     *
     */
    protected $response;

    /**
     * @Type("string")
     * @SerializedName("signature")
     *
     */
    protected $signature;

    
    public function getReservationCode() {
        return $this->reservationCode;
    }

    public function getRAmount() {
        return $this->amount;
    }

    public function getResponse() {
        return $this->response;
    }

    public function getSignature() {
        return $this->signature;
    }

    public function setReservationCode($reservationCode) {
        $this->reservationCode = $reservationCode;
        return $this;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function setResponse($response) {
        $this->response = $response;
        return $this;
    }

    public function setSignature($signature) {
        $this->signature = $signature;
        return $this;
    }
}
