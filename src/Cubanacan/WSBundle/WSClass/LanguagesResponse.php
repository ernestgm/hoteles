<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Description of LanguagesResponse
 *
 * @author obretau
 */
class LanguagesResponse extends EntityResponse{
    /**
     * @var array lenguajes
     * @Type("Cubanacan\WSBundle\WSClass\ArrayString")
     *
     */
    protected $lenguajes;
    
    public function getLenguajes() {
        return $this->lenguajes;
    }

    public function setLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
        return $this;
    }


}
