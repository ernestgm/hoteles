<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayLocations {
    
    /**
     * @var array Location $locations
     * @Type("array<Cubanacan\WSBundle\WSClass\Location>")
     * 
     * @SerializedName("location")
     */
    protected $location;
    
    public function getLocation() {
        return $this->location;
    }

    public function setLocation($location) {
        $this->location = $location;
        return $this;
    }
   
}
