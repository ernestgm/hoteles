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
 * Description of LocationResponse
 *
 * @author obretau
 */
class LocationResponse extends EntityResponse{

    /**
     * @var array Location $locations
     * @Type("Cubanacan\WSBundle\WSClass\ArrayLocations")
     *
     * @SerializedName("locations")
     */
    protected $locations;

    public function getLocations() {
        return $this->locations;
    }

    public function setLocations($locations) {
        $this->locations = $locations;
        return $this;
    }


}
