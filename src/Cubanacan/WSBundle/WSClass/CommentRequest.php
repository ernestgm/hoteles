<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of CommentRequest
 *
 * @author obretau
 */
class CommentRequest extends Entity{
    
    protected $text;
    protected $hotelId;	
    protected $email;
    protected $password;
    
    public function getText() {
        return $this->text;
    }

    public function getHotelId() {
        return $this->hotelId;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    public function setHotelId($hotelId) {
        $this->hotelId = $hotelId;
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
