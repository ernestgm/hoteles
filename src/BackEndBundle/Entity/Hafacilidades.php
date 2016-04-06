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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="icono", type="string", length=255, nullable=true)
     */
    private $icono;

    /**
     * @var \Imagen
     *
     * @ORM\ManyToOne(targetEntity="Imagen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Imagenid", referencedColumnName="id")
     * })
     */
    private $imagenid;

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
     * Set imagenid
     *
     * @param \BackEndBundle\Entity\Imagen $imagenid
     * @return Hafacilidades
     */
    public function setImagenid(\BackEndBundle\Entity\Imagen $imagenid = null)
    {
        $this->imagenid = $imagenid;

        return $this;
    }

    /**
     * Get imagenid
     *
     * @return \BackEndBundle\Entity\Imagen 
     */
    public function getImagenid()
    {
        return $this->imagenid;
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

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Hafacilidades
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
