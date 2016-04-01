<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class TitlesResponse extends EntityResponse{

    /**
     * @Type("array<Cubanacan\BackendBundle\Entity\Title>")
     * @SerializedName("titles")
     */
    protected $titles;

    public function __construct($titles){
        $this->titles = $titles;
    }

    public function getTitles(){
        return $this->titles;
    }

    public function setTitles($titles){
        $this->titles = $titles;
    }
}