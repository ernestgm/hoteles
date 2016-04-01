<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Description of OptionalAmenity
 *
 * @author obretau
 */
class OptionalAmenityDetails extends EntityName {
    
    /**
     * @var string $description
     * @Type("string")
     */
    protected $description;
    /**
     * @var string $code
     * @Type("string")
     */
    protected $code;
    /**
     * @var DateTime $startDate
     * @Type("integer")
     */
    protected $startDate;
    /**
     * @var DateTime $endDate
     * @Type("integer")
     */
    protected $endDate;
    
    public function getDescription() {
        return $this->description;
    }

    public function getCode() {
        return $this->code;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setStartDate(DateTime $startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    public function setEndDate(DateTime $endDate) {
        $this->endDate = $endDate;
        return $this;
    }


}
