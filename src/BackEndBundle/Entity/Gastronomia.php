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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Hotel", inversedBy="gastronomiaid")
     * @ORM\JoinTable(name="gastronomia_hotel",
     *   joinColumns={
     *     @ORM\JoinColumn(name="gastronomiaid", referencedColumnName="id")
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
     * @return string 
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
     * Set imagen
     *
     * @param string $imagen
     * @return Gastronomia
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
     * Add hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Gastronomia
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
