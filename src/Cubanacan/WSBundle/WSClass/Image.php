<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of Object
 *
 * @author obretau
 */
class Image {
    
    /**
     * @var array Image $image
     * @Type("string")  
     * @SerializedName("imageUrl") 
     */
    protected $imageUrl;
    /**
     * @var array Image $image
     * @Type("string")      
     */
    protected $description;
    
    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setImageUrl($imageUrl) {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }


}
