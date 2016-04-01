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
 * Description of Address
 *
 * @author obretau
 */
class Address {
    /**
     * @var String $address1
     * @Type("string")
     * @SerializedName("address1")
     */
    private $address1;
    
    public function getAddress1() {
        return $this->address1;
    }

    public function setAddress1(String $address1) {
        $this->address1 = $address1;
        return $this;
    }
}
