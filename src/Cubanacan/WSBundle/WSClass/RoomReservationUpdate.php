<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomReservationUpdate
 *
 * @author obretau
 */
class RoomReservationUpdate {
    
    protected $referenceCode;
    /**
     * @var array roomTypes
     *
     */
    protected $roomTypes;
    
    protected $email;
    
    protected $password;
    
    public function getReferenceCode() {
        return $this->referenceCode;
    }

    public function getRoomTypes() {
        return $this->roomTypes;
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

    public function setRoomTypes($roomTypes) {
        $this->roomTypes = $roomTypes;
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
