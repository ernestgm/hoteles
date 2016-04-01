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
 * Description of Customer
 *
 * @author obretau
 */
class Customer extends EntityName{
    
    /**
     * @Type("string")
     * @SerializedName("lastname")
     */
    protected $lastName;
    /**
     * @Type("string")
     */
    protected $email;
    /**
     * @Type("string")
     */
    protected $password;
    /**
     * @Type("string")
     */
    protected $address;
    /**
     * @Type("integer")
     */
    protected $country;
    /**
     * @Type("string")
     */
    protected $language;
    /**
     * @Type("string")
     * @SerializedName("countryName")
     */
    protected $countryName;
    /**
     * @Type("string")
     * @SerializedName("languageName")
     */
    protected $languageName;
    
    function __construct($email=null, $password=null, $id=null, $name=null, $lastName=null,
                                $address=null, $country=null, $language=null, 
                                $countryName=null, $languageName=null) {
        parent::__construct($name, $id);
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        $this->country = $country;
        $this->language = $language;
        $this->countryName = $countryName;
        $this->languageName = $languageName;
    }

    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    public function getCountryName() {
        return $this->countryName;
    }

    public function setCountryName($countryName) {
        $this->countryName = $countryName;
        return $this;
    }

    public function getLanguageName() {
        return $this->languageName;
    }

    public function setLanguageName($languageName) {
        $this->languageName = $languageName;
        return $this;
    }
    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }



}
