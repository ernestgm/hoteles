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
 * Description of MealPlan
 *
 * @author obretau
 */
class MealPlanDetails extends EntityName{
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
     * @var integer $rank
     * @Type("integer")
     */
    protected $rank;
    /**
     * @var string $localizedName
     * @Type("string")
     * @SerializedName("localizedName")
     */
    protected $localizedName;
    
    public function getDescription() {
        return $this->description;
    }

    public function getCode() {
        return $this->code;
    }

    public function getRank() {
        return $this->rank;
    }

    public function getLocalizedName() {
        return $this->localizedName;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setRank($rank) {
        $this->rank = $rank;
        return $this;
    }

    public function setLocalizedName($localizedName) {
        $this->localizedName = $localizedName;
        return $this;
    }


}
