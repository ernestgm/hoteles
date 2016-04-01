<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of SpecialOfferResponse
 *
 * @author obretau
 */
class SpecialOfferResponse extends EntityResponse{
    
    /**
     * @var array specialOffersResult
     *
     */
    protected $specialOffersResult;
    
    public function getSpecialOffersResult() {
        return $this->specialOffersResult;
    }

    public function setSpecialOffersResult($specialOffersResult) {
        $this->specialOffersResult = $specialOffersResult;
        return $this;
    }


}
