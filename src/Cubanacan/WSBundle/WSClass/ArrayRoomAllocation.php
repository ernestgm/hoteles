<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayRoomAllocation {
    
    /**
     * @var array facilities     
     * @Type("array<Cubanacan\WSBundle\WSClass\RoomAllocation>")
     * 
     * @SerializedName("roomAllocation")
     */
    protected $roomAllocation;
    
    public function getRoomAllocation() {
        return $this->roomAllocation;
    }

    public function setRoomAllocation($roomAllocation) {
        $this->roomAllocation = $roomAllocation;
        return $this;
    }


}
