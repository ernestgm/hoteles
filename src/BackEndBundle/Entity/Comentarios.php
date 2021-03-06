<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table(name="comentarios")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\ComentariosRepository")
 */
class Comentarios
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aprobado", type="boolean", nullable=true)
     */
    private $aprobado;

    /**
     * @ORM\OneToMany(targetEntity="Respuesta",mappedBy="comentarioid")
     */
    private $respuesta;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel",inversedBy="comentarios")
     * @ORM\JoinColumn(name="hotelcodigo",referencedColumnName="codigo")
     */
    private $hotelcodigo;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User",inversedBy="comentarios")
     * @ORM\JoinColumn(name="userid",referencedColumnName="id")
     */
    private $userid;



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
     * Set titulo
     *
     * @param string $titulo
     * @return Comentarios
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Comentarios
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Comentarios
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set aprobado
     *
     * @param boolean $aprobado
     * @return Comentarios
     */
    public function setAprobado($aprobado)
    {
        $this->aprobado = $aprobado;

        return $this;
    }

    /**
     * Get aprobado
     *
     * @return boolean 
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set respuestaid
     *
     * @param \BackEndBundle\Entity\Respuesta $respuestaid
     * @return Comentarios
     */
    public function setRespuestaid(\BackEndBundle\Entity\Respuesta $respuestaid = null)
    {
        $this->respuestaid = $respuestaid;

        return $this;
    }

    /**
     * Get respuestaid
     *
     * @return \BackEndBundle\Entity\Respuesta 
     */
    public function getRespuestaid()
    {
        return $this->respuestaid;
    }

    /**
     * Set hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Comentarios
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
     * Set userid
     *
     * @param \UserBundle\Entity\User $userid
     * @return Comentarios
     */
    public function setUserid(\UserBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \UserBundle\Entity\User
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
