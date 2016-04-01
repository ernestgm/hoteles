<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use Cubanacan\WSBundle\WSClass\TPVData;

class TPVResponse extends EntityResponse{

    /*
     * @var TPVData $data
     * @Type("Cubanacan\WSBundle\WSClass\TPVData")
     * @SerializedName("data")
     */
    protected $data;

    public function __construct($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }
}