<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;

/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayInt {
    
    /**
     * @var array int
     * @Type("array<integer>")
     * 
     */
    protected $int;
    
    public function getInt() {
        return $this->int;
    }

    public function setInt($int) {
        $this->int = $int;
        return $this;
    }


   
}
