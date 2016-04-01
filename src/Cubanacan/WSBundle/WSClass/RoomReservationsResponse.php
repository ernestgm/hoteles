<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomReservationsResponse
 *
 * @author obretau
 */
class RoomReservationsResponse extends EntityResponse{
    /**
     * @var array roomReservationsResult
     *
     */
    protected $roomReservationsResult;
    
    public function getRoomReservationsResult() {
        return $this->roomReservationsResult;
    }

    public function setRoomReservationsResult($roomReservationsResult) {
        $this->roomReservationsResult = $roomReservationsResult;
        return $this;
    }


}
