<?php

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use Cubanacan\WSBundle\WSClass\TPVPostData;

class TPVInfo{
    /**
     * @var int $id
     * @Type("integer")
     * @SerializedName("id")
     */
    protected $id;

    /**
     * @var string $language
     * @Type("string")
     * @SerializedName("language")
     */
    protected $language;

    /**
     * @var string $titular
     * @Type("string")
     * @SerializedName("titular")
     */
    protected $titular;

    public function __construct($id, $language){
        $this->id = $id;
        $this->language = $language;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getLanguage(){
        return $this->language;
    }

    public function setLanguage($language){
        $this->language = $language;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function seTitular($titular){
        $this->titular = $titular;
    }
}