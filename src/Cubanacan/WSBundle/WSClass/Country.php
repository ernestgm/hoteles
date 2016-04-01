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
 * Description of Country
 *
 * @author obretau
 */
class Country extends EntityName{
    
    /**
     * @var array Country $country
     * @Type("string")
     * @SerializedName("countryCode")
     */
    protected $countryCode;
    
    public function getCountryCode() {
        return $this->countryCode;
    }

    public function setCountryCode($countryCode) {
        $this->countryCode = $countryCode;
        return $this;
    }
}
