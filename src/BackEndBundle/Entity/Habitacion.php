<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\HabitacionRepository")
 */
class Habitacion
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
     * @var integer
     *
     * @ORM\Column(name="ws_id", type="integer", nullable=true)
     */
    private $wsId;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel",cascade={"persist"},inversedBy="tipoHabitacion")
     * @ORM\JoinColumn(name="hotelcodigo",referencedColumnName="codigo")
     */
    private $hotelcodigo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Hafacilidades",cascade={"persist"}, inversedBy="habitacionid")
     * @ORM\JoinTable(name="habitacion_hafacilidades",
     *   joinColumns={
     *     @ORM\JoinColumn(name="habitacionid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="hafacilidadesid", referencedColumnName="id")
     *   }
     * )
     */
    private $hafacilidadesid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hafacilidadesid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Habitacion
     */
    public function setHotelcodigo(\BackEndBundle\Entity\Hotel $hotelcodigo = null)
    {
        $this->hotelcodigo = $hotelcodigo;

        return $this;
    }

    /**
     * Get hotelcodigo
     *
     * @return \BackEndBundle\Entity\Hotel 
     */
    public function getHotelcodigo()
    {
        return $this->hotelcodigo;
    }

    /**
     * Add hafacilidadesid
     *
     * @param \BackEndBundle\Entity\Hafacilidades $hafacilidadesid
     * @return Habitacion
     */
    public function addHafacilidadesid(\BackEndBundle\Entity\Hafacilidades $hafacilidadesid)
    {
        $this->hafacilidadesid[] = $hafacilidadesid;

        return $this;
    }

    /**
     * Remove hafacilidadesid
     *
     * @param \BackEndBundle\Entity\Hafacilidades $hafacilidadesid
     */
    public function removeHafacilidadesid(\BackEndBundle\Entity\Hafacilidades $hafacilidadesid)
    {
        $this->hafacilidadesid->removeElement($hafacilidadesid);
    }

    /**
     * Get hafacilidadesid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHafacilidadesid()
    {
        return $this->hafacilidadesid;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Habitacion
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

    /**
     * Set wsId
     *
     * @param integer $wsId
     * @return Habitacion
     */
    public function setWsId($wsId)
    {
        $this->wsId = $wsId;

        return $this;
    }

    /**
     * Get wsId
     *
     * @return integer 
     */
    public function getWsId()
    {
        return $this->wsId;
    }
}
