<?php


namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class LocationsWithHotelsResponse extends EntityResponse{

    /**
     * @var array LocationWithHotels $locationsWithHotels
     * @Type("array<Cubanacan\WSBundle\WSClass\LocationWithHotels>")
     *
     * @SerializedName("locationsWithHotels")
     */
    protected $locationsWithHotels;

    function __construct()
    {
        $this->locationsWithHotels = array();
    }

    public function getLocationsWithHotels() {
        return $this->locationsWithHotels;
    }

    public function setLocationsWithHotels($locationsWithHotels) {
        $this->locationsWithHotels = $locationsWithHotels;
        return $this;
    }


}
