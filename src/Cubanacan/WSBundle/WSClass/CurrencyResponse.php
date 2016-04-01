<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of CurrencyResponse
 *
 * @author obretau
 */
class CurrencyResponse extends EntityResponse{
    
    /**
     * @var array currencies
     *
     */
    protected $currencies;
    
    public function getCurrencies() {
        return $this->currencies;
    }

    public function setCurrencies($currencies) {
        $this->currencies = $currencies;
        return $this;
    }


}
