<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gastronomia
 *
 * @ORM\Table(name="gastronomia")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\GastronomiaRepository")
 */
class Gastronomia
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

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
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel",cascade={"persist"},inversedBy="gastronomia")
     * @ORM\JoinColumn(name="hotelcodigo",referencedColumnName="codigo")
     */
    private $hotelcodigo;

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
     * @return Gastronomia
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
     * Set horario
     *
     * @param string $horario
     * @return Gastronomia
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
     * @return Gastronomia
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Gastronomia
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Gastronomia
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
     * Set hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Gastronomia
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
     * Set imagenid
     *
     * @param \BackEndBundle\Entity\Imagen $imagenid
     * @return Gastronomia
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
     * Set nombre
     *
     * @param string $nombre
     * @return Gastronomia
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
