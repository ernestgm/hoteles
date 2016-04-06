<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motivos
 *
 * @ORM\Table(name="motivos")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\MotivosRepository")
 */
class Motivos
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
     * @var integer
     *
     * @ORM\Column(name="ws_id", type="integer", nullable=false)
     */
    private $wsId;

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
     * @ORM\Column(name="imagen", type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel",cascade={"persist"},inversedBy="motivos")
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
     * Set wsId
     *
     * @param integer $wsId
     * @return Motivos
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

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Motivos
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
     * Set imagen
     *
     * @param string $imagen
     * @return Motivos
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
     * Set orden
     *
     * @param integer $orden
     * @return Motivos
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
     * @return Motivos
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
     * @return Motivos
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
     * @return Motivos
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
