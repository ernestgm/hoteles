<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of ChangePasswordRequest
 *
 * @author obretau
 */
class ChangePasswordRequest {
    
    protected $email;
    protected $oldPassword;
    protected $newPassword;
    
    public function getEmail() {
        return $this->email;
    }

    public function getOldPassword() {
        return $this->oldPassword;
    }

    public function getNewPassword() {
        return $this->newPassword;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setOldPassword($oldPassword) {
        $this->oldPassword = $oldPassword;
        return $this;
    }

    public function setNewPassword($newPassword) {
        $this->newPassword = $newPassword;
        return $this;
    }


}
