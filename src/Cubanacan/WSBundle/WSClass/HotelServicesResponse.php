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
 * Description of HotelServicesResponse
 *
 * @author obretau
 */
class HotelServicesResponse extends EntityResponse{
    /**
     * @var array servicesResult
     * @Type("Cubanacan\WSBundle\WSClass\ArrayHotelServices")
     * @SerializedName("servicesResult")
     */
    protected $servicesResult;
    
    public function getServicesResult() {
        return $this->servicesResult;
    }

    public function setServicesResult($servicesResult) {
        $this->servicesResult = $servicesResult;
        return $this;
    }


}
