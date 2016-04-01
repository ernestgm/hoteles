<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayString {
    
    /**
     * @var array strings
     * @Type("array<string>")
     * 
     */
    protected $string;
    
    public function getString() {
        return $this->string;
    }

    public function setString($string) {
        $this->string = $string;
        return $this;
    }

   
}
