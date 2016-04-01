<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class AboutResponse extends EntityResponse{

    /**
     * @Type("array<Hermes\GeneralBundle\Entity\About>")
     * @SerializedName("about")
     */
    protected $about;

    public function __construct($about){
        $this->about = $about;
    }

    public function getAbout(){
        return $this->about;
    }

    public function setAbout($about){
        $this->about = $about;
    }
}