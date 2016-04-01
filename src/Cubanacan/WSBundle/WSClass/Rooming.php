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
 * Description of Rooming
 *
 * @author obretau
 */
class Rooming {

    /**
     * @var string $requirements
     * @Type("string")
     *
     * @SerializedName("requirements")
     */
    protected $requirements;

    /**
     * @var boolean $smoking
     * @Type("boolean")
     *
     * @SerializedName("smoking")
     */
    protected $smoking;
    /**
     * @var Principal $principal
     * @Type("Cubanacan\WSBundle\WSClass\Principal")
     *
     * @SerializedName("principal")
     */
    protected $principal;
    
    public function getRequirements() {
        return $this->requirements;
    }

    public function getSmoking() {
        return $this->smoking;
    }

    public function getPrincipal() {
        return $this->principal;
    }

    public function setRequirements($requirements) {
        $this->requirements = $requirements;
        return $this;
    }

    public function setSmoking($smoking) {
        $this->smoking = $smoking;
        return $this;
    }

    public function setPrincipal(Principal $principal) {
        $this->principal = $principal;
        return $this;
    }


}
