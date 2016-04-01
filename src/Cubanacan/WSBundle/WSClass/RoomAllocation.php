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
 * Description of RoomAllocation
 *
 * @author obretau
 */
class RoomAllocation {
    
    /**
     * @var $adults
     * @Type("integer")
     */
    protected $adults;
    /**
     * @var array childrenAges
     * @Type("Cubanacan\WSBundle\WSClass\ArrayInt")
     * @SerializedName("childrenAges")
     */
    protected $childrenAges;
    /**
     * @var quantity
     * @Type("integer")
     */
    protected $quantity;
    
    public function getAdults() {
        return $this->adults;
    }

    public function getChildrenAges() {
        return $this->childrenAges;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setAdults($adults) {
        $this->adults = $adults;
        return $this;
    }

    public function setChildrenAges($childrenAges) {
        $this->childrenAges = $childrenAges;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }


}
