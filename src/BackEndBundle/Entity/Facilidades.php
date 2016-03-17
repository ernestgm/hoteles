<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facilidades
 *
 * @ORM\Table(name="facilidades")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\FacilidadesRepository")
 */
class Facilidades
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
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
     * @ORM\ManyToMany(targetEntity="Habitacion", inversedBy="facilidadesid")
     * @ORM\JoinTable(name="facilidades_habitacion",
     *   joinColumns={
     *     @ORM\JoinColumn(name="facilidadesid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="habitacionid", referencedColumnName="id")
     *   }
     * )
     */
    private $habitacionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Hotel", inversedBy="facilidadesid")
     * @ORM\JoinTable(name="facilidades_hotel",
     *   joinColumns={
     *     @ORM\JoinColumn(name="facilidadesid", referencedColumnName="id")
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
        $this->habitacionid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hotelcodigo = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set icono
     *
     * @param string $icono
     * @return Facilidades
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
     * @return Facilidades
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
     * Add habitacionid
     *
     * @param \BackEndBundle\Entity\Habitacion $habitacionid
     * @return Facilidades
     */
    public function addHabitacionid(\BackEndBundle\Entity\Habitacion $habitacionid)
    {
        $this->habitacionid[] = $habitacionid;

        return $this;
    }

    /**
     * Remove habitacionid
     *
     * @param \BackEndBundle\Entity\Habitacion $habitacionid
     */
    public function removeHabitacionid(\BackEndBundle\Entity\Habitacion $habitacionid)
    {
        $this->habitacionid->removeElement($habitacionid);
    }

    /**
     * Get habitacionid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHabitacionid()
    {
        return $this->habitacionid;
    }

    /**
     * Add hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Facilidades
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
