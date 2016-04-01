<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayCountries {
    
    /**
     * @var array Country $country
     * @Type("array<Cubanacan\WSBundle\WSClass\Country>")
     * 
     * @SerializedName("country")
     */
    protected $country;
    
    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }


   
}
