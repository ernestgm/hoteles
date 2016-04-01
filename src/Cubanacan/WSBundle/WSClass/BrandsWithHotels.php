<?php


namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class BrandsWithHotels extends EntityIdResponse{
    protected $name;

    /**
     * @var array HotelDetails $hotels
     * @Type("array<Cubanacan\WSBundle\WSClass\HotelDetails>")
     *
     * @SerializedName("hotels")
     */
    protected $hotels = array();

    protected $logo;

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function getHotels()
    {
        return $this->hotels;
    }

    public function setHotels($hotels)
    {
        $this->hotels = $hotels;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
