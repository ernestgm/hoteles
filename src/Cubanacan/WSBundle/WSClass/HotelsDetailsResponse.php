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
 * Description of HotelsDetailsResponse
 *
 * @author obretau
 */
class HotelsDetailsResponse extends EntityResponse{
    /**
     * @var array hotelsDetailsResult
     * @Type("Cubanacan\WSBundle\WSClass\ArrayHotelsDetails")
     *
     * @SerializedName("hotelsDetailsResult")
     */
    protected $hotelsDetailsResult;
    
    public function getHotelsDetailsResult() {
        return $this->hotelsDetailsResult;
    }

    public function setHotelsDetailsResult($hotelsDetailsResult) {
        $this->hotelsDetailsResult = $hotelsDetailsResult;
        return $this;
    }


}
