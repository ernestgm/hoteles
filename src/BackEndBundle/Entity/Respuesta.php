<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="respuesta")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\RespuestaRepository")
 */
class Respuesta
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User",inversedBy="respuestas")
     * @ORM\JoinColumn(name="userid",referencedColumnName="id")
     */
    private $userid;

    /**
     * @var \Comentarios
     *
     * @ORM\ManyToOne(targetEntity="Comentarios",inversedBy="respuesta")
     * @ORM\JoinColumn(name="comentarioid",referencedColumnName="id")
     */
    private $comentarioid;



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
     * @return Respuesta
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
     * Set userid
     *
     * @param \UserBundle\Entity\User $userid
     * @return Respuesta
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

    /**
     * Set comentarioid
     *
     * @param \BackEndBundle\Entity\Comentarios $comentarioid
     * @return Respuesta
     */
    public function setComentarioid(\BackEndBundle\Entity\Comentarios $comentarioid = null)
    {
        $this->comentarioid = $comentarioid;

        return $this;
    }

    /**
     * Get comentarioid
     *
     * @return \BackEndBundle\Entity\Comentarios 
     */
    public function getComentarioid()
    {
        return $this->comentarioid;
    }
}
