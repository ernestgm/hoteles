<?php


namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class HotelsSliderEntry extends EntityIdResponse{
    protected $hotelName;
    protected $hotelId;
    protected $imageUrl;
    protected $hotelCategory;

    /**
     * @return mixed
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * @param mixed $hotelName
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
    }

    /**
     * @return mixed
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * @param mixed $hotelId
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getHotelCategory()
    {
        return $this->hotelCategory;
    }

    /**
     * @param mixed $hotelCategory
     */
    public function setHotelCategory($hotelCategory)
    {
        $this->hotelCategory = $hotelCategory;
    }


}
