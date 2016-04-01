<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomTypeUpdate
 *
 * @author obretau
 */
class RoomTypeUpdate extends EntityResponse{
	
    protected $roomTypeId;
    
    public function getRoomTypeId() {
        return $this->roomTypeId;
    }

    public function setRoomTypeId($roomTypeId) {
        $this->roomTypeId = $roomTypeId;
        return $this;
    }


}
