<?php


namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class ThemesWithHotelsResponse extends EntityResponse{

    /**
     * @var array ThemeWithHotels $themesWithHotels
     * @Type("array<Cubanacan\WSBundle\WSClass\ThemeWithHotels>")
     *
     * @SerializedName("themesWithHotels")
     */
    protected $themesWithHotels;

    function __construct()
    {
        $this->themesWithHotels = array();
    }

    public function getThemesWithHotels() {
        return $this->themesWithHotels;
    }

    public function setThemesWithHotels($themesWithHotels) {
        $this->themesWithHotels = $themesWithHotels;
        return $this;
    }


}
