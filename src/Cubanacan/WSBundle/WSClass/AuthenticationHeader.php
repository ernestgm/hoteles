<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of AuthenticationHeader
 *
 * @author obretau
 */
class AuthenticationHeader {
    
    /**
     * @var String $user
     *
     */
    protected $user;
    
    /**
     * @var String $password
     *
     */
    protected $password;
    
    /**
     * @var String $otherAttributes
     *
     */
    protected $otherAttributes = array();
    
    
    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getOtherAttributes() {
        return $this->otherAttributes;
    }

    public function setUser(String $user) {
        $this->user = $user;
    }

    public function setPassword(String $password) {
        $this->password = $password;
    }

    public function setOtherAttributes($otherAttributes) {
        $this->otherAttributes = $otherAttributes;
    }


}
