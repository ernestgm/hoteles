<?php
namespace Cubanacan\WSBundle\WSClass;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Description of ContactRequest
 *
 * @author coperfield
 */
class ContactRequest{
    /**
     * @Type("string")
     */
    protected $name;

    /**
     * @Type("string")
     */
    protected $email;

    /**
     * @Type("string")
     */
    protected $message;

    /**
     * @Type("string")
     */
    protected $recaptcha;
    
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getRecaptcha() {
        return $this->recaptcha;
    }

    public function setRecaptcha($recaptcha) {
        $this->recaptcha = $recaptcha;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }
}