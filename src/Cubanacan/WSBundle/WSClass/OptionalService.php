<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Description of Object
 *
 * @author obretau
 */
class OptionalService extends EntityName{
   
    /**
     * @var String $price
     * @Type("double")
     */
    protected $price;
    
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
}
