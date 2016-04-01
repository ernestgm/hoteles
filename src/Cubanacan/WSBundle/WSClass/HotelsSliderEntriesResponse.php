<?php


namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class HotelsSliderEntriesResponse extends EntityResponse{

    /**
     * @var array HotelsSliderEntry $entries
     * @Type("array<Cubanacan\WSBundle\WSClass\HotelsSliderEntry>")
     *
     * @SerializedName("entries")
     */
    protected $entries;

    function __construct()
    {
        $this->entries = array();
    }

    public function getEntries() {
        return $this->entries;
    }

    public function setEntries($entries) {
        $this->entries = $entries;
        return $this;
    }


}
