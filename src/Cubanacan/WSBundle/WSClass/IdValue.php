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
class IdValue extends Entity {
    /**
     * @var String $value
     * @Type("string")
     */
    protected $value;
    
    public function getValue() {
        return $this->value;
    }

    public function setValue(String $value) {
        $this->value = $value;
        return $this;
    }


}
