<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table(name="marca")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\MarcaRepository")
 */
class Marca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="estilo", type="string", length=255, nullable=true)
     */
    private $estilo;

    /**
     * @var string
     *
     * @ORM\Column(name="hotelcodigo", type="string", length=255, nullable=false)
     */
    private $hotelcodigo;



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
     * Set estilo
     *
     * @param string $estilo
     * @return Marca
     */
    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;

        return $this;
    }

    /**
     * Get estilo
     *
     * @return string 
     */
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * Set hotelcodigo
     *
     * @param string $hotelcodigo
     * @return Marca
     */
    public function setHotelcodigo($hotelcodigo)
    {
        $this->hotelcodigo = $hotelcodigo;

        return $this;
    }

    /**
     * Get hotelcodigo
     *
     * @return string 
     */
    public function getHotelcodigo()
    {
        return $this->hotelcodigo;
    }
}
