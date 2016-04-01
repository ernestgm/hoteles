<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of UserInfo
 *
 * @author obretau
 */
class UserInfo extends Entity{
    
    protected $userName;
    
    protected $email;
    
    protected $language;	
    /**
     * @var Country country
     *
     */
    protected $country;
    
    protected $city;	
    
    protected $address;
    
    protected $postCode;
    
    protected $phone;
    
    public function getUserName() {
        return $this->userName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getCity() {
        return $this->city;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPostCode() {
        return $this->postCode;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    public function setCountry(Country $country) {
        $this->country = $country;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setPostCode($postCode) {
        $this->postCode = $postCode;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }


}
