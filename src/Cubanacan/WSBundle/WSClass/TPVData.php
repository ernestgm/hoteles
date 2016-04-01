<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use Cubanacan\WSBundle\WSClass\TPVPostData;

class TPVData{
    /**
     * @var string $dispatchUrl
     * @Type("string")
     * @SerializedName("dispatchUrl")
     */
    protected $dispatchUrl;

    /**
     * @var integer $reservationId
     * @Type("integer")
     * @SerializedName("reservationId")
     */
    protected $reservationId;

    /**
     * @var TPVPostData $tpvPostData
     * @Type("Cubanacan\WSBundle\WSClass\TPVPostData")
     * @SerializedName("tpvPostData")
     */
    protected $tpvPostData;

    public function __construct($dispatchUrl, $reservationId, $tpvPostData){
        $this->dispatchUrl = $dispatchUrl;
        $this->reservationId = $reservationId;
        $this->tpvPostData = $tpvPostData;
    }

    public function getDispatchUrl(){
        return $this->dispatchUrl;
    }

    public function setDispatchUrl($dispatchUrl){
        $this->dispatchUrl = $dispatchUrl;
    }

    public function getReservationId(){
        return $this->reservationId;
    }

    public function setReservationId($reservationId){
        $this->reservationId = $reservationId;
    }

    public function getTpvPostData(){
        return $this->tpvPostData;
    }

    public function setTpvPostData($tpvPostData){
        $this->tpvPostData = $tpvPostData;
    }
}