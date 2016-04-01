<?php


namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class ThemeWithHotels extends EntityIdResponse{
    protected $name;

    /**
     * @var array HotelDetails $hotels
     * @Type("array<Cubanacan\WSBundle\WSClass\HotelDetails>")
     *
     * @SerializedName("hotels")
     */
    protected $hotels = array();

    protected $descriptionEs;
    protected $descriptionEn;
    protected $descriptionRu;
    protected $pictures;

    public function getDescriptionEs()
    {
        return $this->descriptionEs;
    }

    public function setDescriptionEs($descriptionEs)
    {
        $this->descriptionEs = $descriptionEs;
    }

    public function getDescriptionEn()
    {
        return $this->descriptionEn;
    }

    public function setDescriptionEn($descriptionEn)
    {
        $this->descriptionEn = $descriptionEn;
    }

    public function getDescriptionRu()
    {
        return $this->descriptionRu;
    }

    public function setDescriptionRu($descriptionRu)
    {
        $this->descriptionRu = $descriptionRu;
    }

    public function getPictures()
    {
        return $this->pictures;
    }

    public function setPictures($pictures)
    {
        $this->pictures = $pictures;
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
