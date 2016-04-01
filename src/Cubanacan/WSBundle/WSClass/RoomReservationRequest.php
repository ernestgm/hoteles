<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomReservationRequest
 *
 * @author obretau
 */
class RoomReservationRequest {
    
    protected $checkIn;
    
    protected $checkOut;
    /**
     * @var PaymentMethodEnum paymentMethod
     *
     */
    protected $paymentMethod;
    /**
     * @var array rooms
     *
     */
    protected $rooms;
    
    protected $email;
    
    protected $password;

    protected $titularName;

    protected $titularLastName;

    protected $titularEmail;
    
    public function getCheckIn() {
        return $this->checkIn;
    }

    public function getCheckOut() {
        return $this->checkOut;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }

    public function getRooms() {
        return $this->rooms;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getTitularName() {
        return $this->titularName;
    }

    public function getTitularLastName() {
        return $this->titularLastName;
    }

    public function getTitularEmail() {
        return $this->titularEmail;
    }

    public function setCheckIn($checkIn) {
        $this->checkIn = $checkIn;
        return $this;
    }

    public function setCheckOut($checkOut) {
        $this->checkOut = $checkOut;
        return $this;
    }

    public function setPaymentMethod(PaymentMethodEnum $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function setRooms($rooms) {
        $this->rooms = $rooms;
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

    public function setTitularName($titularName) {
        $this->titularName = $titularName;
        return $this;
    }

    public function setTitularLastName($titularLastName) {
        $this->titularLastName = $titularLastName;
        return $this;
    }

    public function setTitularEmail($titularEmail) {
        $this->titularEmail = $titularEmail;
        return $this;
    }
}
