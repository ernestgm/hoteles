<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of Principal
 *
 * @author obretau
 */
class Principal {
    
    protected $firstName;
    protected $lastName;
    protected $countryCode;
    /**
     * @var PersonalTitleEnum personalTitle
     *
     */
    protected $personalTitle;
    
    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getCountryCode() {
        return $this->countryCode;
    }

    public function getPersonalTitle() {
        return $this->personalTitle;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function setCountryCode($countryCode) {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function setPersonalTitle(PersonalTitleEnum $personalTitle) {
        $this->personalTitle = $personalTitle;
        return $this;
    }


}
