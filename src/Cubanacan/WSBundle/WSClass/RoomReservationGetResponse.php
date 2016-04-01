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
 * Description of RoomReservationGetResponse
 *
 * @author obretau
 */
class RoomReservationGetResponse extends EntityResponse{

    /**
     * @var RoomReservation $roomReservation
     * @Type("Cubanacan\WSBundle\WSClass\RoomReservation")
     *
     * @SerializedName("roomReservation")
     */
    protected $roomReservation;
    
    public function getRoomReservation() {
        return $this->roomReservation;
    }

    public function setRoomReservation(RoomReservation $roomReservation) {
        $this->roomReservation = $roomReservation;
        return $this;
    }


}
