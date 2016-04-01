<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

/**
 * Description of GetSupportedLocations
 *
 * @author obretau
 */
class GetSupportedLocations {
    
    protected $withHotelsOnly;
    
    public function getWithHotelsOnly() {
        return $this->withHotelsOnly;
    }

    public function setWithHotelsOnly($withHotelsOnly) {
        $this->withHotelsOnly = $withHotelsOnly;
        return $this;
    }


}
