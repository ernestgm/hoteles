<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hafacilidades
 *
 * @ORM\Table(name="hafacilidades")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\HafacilidadesRepository")
 */
class Hafacilidades
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
     * @ORM\ManyToMany(targetEntity="Habitacion", mappedBy="hafacilidadesid")
     */
    private $habitacionid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habitacionid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Hafacilidades
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
     * @return Hafacilidades
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
     * @return Hafacilidades
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
}
