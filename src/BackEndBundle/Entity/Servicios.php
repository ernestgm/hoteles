<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", indexes={@ORM\Index(name="FKservicios465069", columns={"Imagenid"})})
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\ServiciosRepository")
 */
class Servicios
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="icono", type="string", length=255, nullable=true)
     */
    private $icono;

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=255, nullable=true)
     */
    private $horario;

    /**
     * @var string
     *
     * @ORM\Column(name="dias_habiles", type="string", length=255, nullable=true)
     */
    private $diasHabiles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="principal", type="boolean", nullable=true)
     */
    private $principal;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

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
     * @ORM\ManyToMany(targetEntity="Hotel", inversedBy="serviciosid")
     * @ORM\JoinTable(name="servicios_hotel",
     *   joinColumns={
     *     @ORM\JoinColumn(name="serviciosid", referencedColumnName="id")
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Servicios
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set icono
     *
     * @param string $icono
     * @return Servicios
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
     * Set horario
     *
     * @param string $horario
     * @return Servicios
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string 
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set diasHabiles
     *
     * @param string $diasHabiles
     * @return Servicios
     */
    public function setDiasHabiles($diasHabiles)
    {
        $this->diasHabiles = $diasHabiles;

        return $this;
    }

    /**
     * Get diasHabiles
     *
     * @return string 
     */
    public function getDiasHabiles()
    {
        return $this->diasHabiles;
    }

    /**
     * Set principal
     *
     * @param boolean $principal
     * @return Servicios
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return boolean 
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Servicios
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set imagenid
     *
     * @param \BackEndBundle\Entity\Imagen $imagenid
     * @return Servicios
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
     * Add hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Servicios
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
