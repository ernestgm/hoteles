<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomType
 *
 * @author obretau
 */
class RoomType {
    
    protected $roomTypeId;
    
    protected $roomTypeName;
    /**
     * @var array roomServices
     *
     */
    protected $roomServices;
    
    public function getRoomTypeId() {
        return $this->roomTypeId;
    }

    public function getRoomTypeName() {
        return $this->roomTypeName;
    }

    public function getRoomServices() {
        return $this->roomServices;
    }

    public function setRoomTypeId($roomTypeId) {
        $this->roomTypeId = $roomTypeId;
        return $this;
    }

    public function setRoomTypeName($roomTypeName) {
        $this->roomTypeName = $roomTypeName;
        return $this;
    }

    public function setRoomServices($roomServices) {
        $this->roomServices = $roomServices;
        return $this;
    }


}
