<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of Comment
 *
 * @author obretau
 */
class Comment extends Entity{
    
    protected $text;
    protected $customerId;
    /**
     * @Type("string")
     * @SerializedName("customerEmail")
     */
    protected $customerEmail;
    protected $customername;
    /**
     * @Type("string")
     * @SerializedName("customerLastname")
     */
    protected $customerLastname;	
    protected $status;
    protected $accepted;
    protected $hotelId;	
    protected $registerDate;
    
    public function getText() {
        return $this->text;
    }

    public function getCustomerId() {
        return $this->customerId;
    }

    public function getCustomerEmail() {
        return $this->customerEmail;
    }

    public function getCustomername() {
        return $this->customername;
    }

    public function getCustomerLastname() {
        return $this->customerLastname;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getAccepted() {
        return $this->accepted;
    }

    public function getHotelId() {
        return $this->hotelId;
    }

    public function getRegisterDate() {
        return $this->registerDate;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    public function setCustomerId($customerId) {
        $this->customerId = $customerId;
        return $this;
    }

    public function setCustomerEmail($customerEmail) {
        $this->customerEmail = $customerEmail;
        return $this;
    }

    public function setCustomername($customername) {
        $this->customername = $customername;
        return $this;
    }

    public function setCustomerLastname($customerLastname) {
        $this->customerLastname = $customerLastname;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setAccepted($accepted) {
        $this->accepted = $accepted;
        return $this;
    }

    public function setHotelId($hotelId) {
        $this->hotelId = $hotelId;
        return $this;
    }

    public function setRegisterDate($registerDate) {
        $this->registerDate = $registerDate;
        return $this;
    }


}
