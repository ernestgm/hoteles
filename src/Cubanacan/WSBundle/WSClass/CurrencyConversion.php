<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of CurrencyConversion
 *
 * @author obretau
 */
class CurrencyConversion {
    
    protected $fromCurrency;
    
    protected $toCurrency;
    
    protected $rate;
    
    public function getFromCurrency() {
        return $this->fromCurrency;
    }

    public function getToCurrency() {
        return $this->toCurrency;
    }

    public function getRate() {
        return $this->rate;
    }

    public function setFromCurrency($fromCurrency) {
        $this->fromCurrency = $fromCurrency;
        return $this;
    }

    public function setToCurrency($toCurrency) {
        $this->toCurrency = $toCurrency;
        return $this;
    }

    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }


}
