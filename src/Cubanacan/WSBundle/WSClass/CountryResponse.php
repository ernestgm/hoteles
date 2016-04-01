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
 * Description of CountryResponse
 *
 * @author obretau
 */
class CountryResponse extends EntityResponse{
    
    /**
     * @var array countryResult
     * @var Address adress
     * @Type("Cubanacan\WSBundle\WSClass\ArrayCountries")
     * @SerializedName("countryResult")
     */
    protected $countryResult;
    
    public function getCountryResult() {
        return $this->countryResult;
    }

    public function setCountryResult($countryResult) {
        $this->countryResult = $countryResult;
        return $this;
    }


}
