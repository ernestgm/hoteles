<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of RoomTypesResponse
 *
 * @author obretau
 */
class RoomTypesResponse extends EntityResponse{
    /**
     * @var array roomTypesResult
     *
     */
    protected $roomTypesResult;
    
    public function getRoomTypesResult() {
        return $this->roomTypesResult;
    }

    public function setRoomTypesResult($roomTypesResult) {
        $this->roomTypesResult = $roomTypesResult;
        return $this;
    }


    
}
