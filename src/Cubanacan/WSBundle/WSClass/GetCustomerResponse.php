<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
/**
 * Description of CustomerResponse
 *
 * @author obretau
 */
class GetCustomerResponse extends EntityResponse{
    /**
     * @var Address adress
     * @Type("Cubanacan\WSBundle\WSClass\Customer")
     */
    protected $customer;
    
    public function getCustomer() {
        return $this->customer;
    }

    public function setCustomer($customer) {
        $this->customer = $customer;
        return $this;
    }


}
