<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of BookedRoom
 *
 * @author obretau
 */
class BookedRoom {
    
    /**
     * @var integer $adults
     *
     */
    protected $adults;
    /**
     * @var integer $mealPlanAdults
     *
     */
    protected $mealPlanAdults;
    /**
     * @var integer $roomTypeAdults
     *
     */
    protected $roomTypeAdults;
    /**
     * @var array $childrenAges
     *
     */
    protected $childrenAges;
    /**
     * @var array $roomings
     *
     */
    protected $roomings;
    /**
     * @var array $optionalServices
     *
     */
    protected $optionalServices;
    
    public function getAdults() {
        return $this->adults;
    }

    public function getMealPlanAdults() {
        return $this->mealPlanAdults;
    }

    public function getRoomTypeAdults() {
        return $this->roomTypeAdults;
    }

    public function getChildrenAges() {
        return $this->childrenAges;
    }

    public function getRoomings() {
        return $this->roomings;
    }

    public function getOptionalServices() {
        return $this->optionalServices;
    }

    public function setAdults($adults) {
        $this->adults = $adults;
        return $this;
    }

    public function setMealPlanAdults($mealPlanAdults) {
        $this->mealPlanAdults = $mealPlanAdults;
        return $this;
    }

    public function setRoomTypeAdults($roomTypeAdults) {
        $this->roomTypeAdults = $roomTypeAdults;
        return $this;
    }

    public function setChildrenAges($childrenAges) {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    public function setRoomings($roomings) {
        $this->roomings = $roomings;
        return $this;
    }

    public function setOptionalServices($optionalServices) {
        $this->optionalServices = $optionalServices;
        return $this;
    }


}
