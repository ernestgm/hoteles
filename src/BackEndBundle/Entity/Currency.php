<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="currency")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\CurrencyRepository")
 */
class Currency
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(name="name",type="string", length=150, nullable=true)
     * @Assert\NotBlank()
     */
    protected $name;

     /**
     * @ORM\Column(name="exchange_rate",type="decimal", length=150, nullable=false,precision=10,scale=4)
     *
     */
    protected $exchangeRateToBase;

    /**
     * @ORM\Column(name="code",type="string", length=5, nullable=false,unique=true)
     *
     */
    protected $code;

    /**
     * @ORM\Column(name="symbol",type="string", length=5, nullable=false,unique=true)
     *
     */
    protected $symbol;

    /**
     * @ORM\Column(name="is_default",type="boolean", nullable=true)
     *
     */
    protected $default;
    /**
     * @ORM\Column(name="enabled",type="boolean", nullable=true)
     *
     */
    protected $enabled;

    /**
     * @var
     *
     */
    private $em;

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * {@inheritdoc}
     */
    public function setRate($exchangeRate)
    {
        $this->exchangeRateToBase = $exchangeRate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRate()
    {
        return $this->exchangeRateToBase;
    }

    /**
     * Convert currency rate.
     *
     * @param float $rate
     */
    public function convert($rate)
    {
        $this->exchangeRateToBase /= $rate;
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set exchangeRateToBase
     *
     * @param string $exchangeRateToBase
     *
     * @return Currency
     */
    public function setExchangeRateToBase($exchangeRateToBase)
    {
        $this->exchangeRateToBase = $exchangeRateToBase;

        return $this;
    }

    /**
     * Get exchangeRateToBase
     *
     * @return string
     */
    public function getExchangeRateToBase()
    {
        return $this->exchangeRateToBase;
    }

    /**
     * Set default
     *
     * @param boolean $default
     *
     * @return Currency
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return boolean
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Currency
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}
