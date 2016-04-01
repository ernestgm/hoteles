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
class RoomAvailabilitySearchResult extends RoomAvailabilitySearchCriteria{
    
    /**
     * @var $availableRoomTypes
     * @Type("array<Cubanacan\WSBundle\WSClass\AvailableRoomType>")
     * @SerializedName("availableRoomTypes") 
     */
    protected $availableRoomTypes;
    
    public function getAvailableRoomTypes() {
        return $this->availableRoomTypes;
    }

    public function setAvailableRoomTypes($availableRoomTypes) {
        $this->availableRoomTypes = $availableRoomTypes;
        return $this;
    }


}
