<?php
namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Description of NewsletterRequest
 *
 * @author Coperfield
 */
class NewsletterRequest{

    /**
     * @Type("string")
     */
    protected $email;
    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
}