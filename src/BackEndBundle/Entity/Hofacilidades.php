<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hofacilidades
 *
 * @ORM\Table(name="hofacilidades")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\HofacilidadesRepository")
 */
class Hofacilidades
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
     * @ORM\Column(name="icono", type="string", length=255, nullable=true)
     */
    private $icono;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Hotel", inversedBy="hofacilidadesid")
     * @ORM\JoinTable(name="facilidades_hotel",
     *   joinColumns={
     *     @ORM\JoinColumn(name="hofacilidadesid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="hotelcodigo", referencedColumnName="codigo")
     *   }
     * )
     */
    private $hotelcodigo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hotelcodigo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set icono
     *
     * @param string $icono
     * @return Hofacilidades
     */
    public function setIcono($icono)
    {
        $this->icono = $icono;

        return $this;
    }

    /**
     * Get icono
     *
     * @return string 
     */
    public function getIcono()
    {
        return $this->icono;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Hofacilidades
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Add hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Hofacilidades
     */
    public function addHotelcodigo(\BackEndBundle\Entity\Hotel $hotelcodigo)
    {
        $this->hotelcodigo[] = $hotelcodigo;

        return $this;
    }

    /**
     * Remove hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     */
    public function removeHotelcodigo(\BackEndBundle\Entity\Hotel $hotelcodigo)
    {
        $this->hotelcodigo->removeElement($hotelcodigo);
    }

    /**
     * Get hotelcodigo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHotelcodigo()
    {
        return $this->hotelcodigo;
    }
}
