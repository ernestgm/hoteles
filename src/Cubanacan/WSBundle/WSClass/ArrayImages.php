<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Description of Object
 *
 * @author obretau
 */
class ArrayImages {
    
    /**
     * @var array Image $image
     * @Type("array<Cubanacan\WSBundle\WSClass\Image>") 
     */
    protected $image;
    
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }


   
}
