<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class TermsOfUseResponse extends EntityResponse{

    /**
     * @Type("array<Hermes\GeneralBundle\Entity\TermsOfUse>")
     * @SerializedName("termsOfUse")
     */
    protected $termsOfUse;

    public function __construct($titles){
        $this->termsOfUse = $titles;
    }

    public function getTermsOfUse(){
        return $this->termsOfUse;
    }

    public function setTermsOfUse($termsOfUse){
        $this->termsOfUse = $termsOfUse;
    }
}