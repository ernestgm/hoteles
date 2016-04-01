<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomReservationCancel
 *
 * @author obretau
 */
class RoomReservationCancel {
    
    protected $referenceCode;
    
    protected $description;
    /**
     * @var CancelCauseEnum cause
     *
     */
    protected $cause;
    
    protected $email;
    
    protected $password;
    
    public function getReferenceCode() {
        return $this->referenceCode;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCause() {
        return $this->cause;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setReferenceCode($referenceCode) {
        $this->referenceCode = $referenceCode;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setCause(CancelCauseEnum $cause) {
        $this->cause = $cause;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }


}
