<?php


namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class BrandsWithHotelsResponse extends EntityResponse{

    /**
     * @var array BrandsWithHotels $brandsWithHotels
     * @Type("array<Cubanacan\WSBundle\WSClass\BrandsWithHotels>")
     *
     * @SerializedName("brandsWithHotels")
     */
    protected $brandsWithHotels;

    function __construct()
    {
        $this->brandsWithHotels = array();
    }

    public function getBrandsWithHotels() {
        return $this->brandsWithHotels;
    }

    public function setBrandsWithHotels($brandsWithHotels) {
        $this->brandsWithHotels = $brandsWithHotels;
        return $this;
    }


}
