<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion", indexes={@ORM\Index(name="FKhabitacion283531", columns={"hotelcodigo"})})
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
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hotelcodigo", referencedColumnName="codigo")
     * })
     */
    private $hotelcodigo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Hafacilidades", inversedBy="habitacionid")
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
}
