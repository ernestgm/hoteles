<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of CancelReservationRequest
 *
 * @author obretau
 */
class CancelReservationRequest {
    /**
     * @var CancelCauseEnum $cause
     *
     */
    protected $cause;
    protected $description;
    protected $code;
    
    public function getCause() {
        return $this->cause;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCode() {
        return $this->code;
    }

    public function setCause(CancelCauseEnum $cause) {
        $this->cause = $cause;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }


}
