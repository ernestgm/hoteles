<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of SearchHotelResponse
 *
 * @author obretau
 */
class SearchHotelResponse {
    
    protected $success;
    /**
     * @var CurrencyConversion currencyRate
     *
     */
    protected $currencyRate;
    /**
     * @var array hotels
     *
     */
    protected $hotels;
    
    public function getSuccess() {
        return $this->success;
    }

    public function getCurrencyRate() {
        return $this->currencyRate;
    }

    public function getHotels() {
        return $this->hotels;
    }

    public function setSuccess($success) {
        $this->success = $success;
        return $this;
    }

    public function setCurrencyRate(CurrencyConversion $currencyRate) {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    public function setHotels($hotels) {
        $this->hotels = $hotels;
        return $this;
    }

}
