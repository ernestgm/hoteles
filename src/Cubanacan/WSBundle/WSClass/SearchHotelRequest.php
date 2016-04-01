<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
/**
 * Description of SearchHotelRequest
 *
 * @author obretau
 */
class SearchHotelRequest {
    
    /**
     * @Type("integer")
     * @SerializedName("maxResults")
     *
     */
    protected $maxResults;
    /**
     * @var SearchHotelCriteria criteria
     * @Type("Cubanacan\WSBundle\WSClass\SearchHotelCriteria")
     */
    protected $criteria;
    
    public function getMaxResults() {
        return $this->maxResults;
    }

    public function getCriteria() {
        return $this->criteria;
    }

    public function setMaxResults($maxResults) {
        $this->maxResults = $maxResults;
        return $this;
    }

    public function setCriteria(SearchHotelCriteria $criteria) {
        $this->criteria = $criteria;
        return $this;
    }


}
