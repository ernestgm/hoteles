<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="FKhotel146676", columns={"marcaid"})})
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\HotelRepository")
 */
class Hotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sistema", type="integer", nullable=false)
     */
    private $id_sistema;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="geolocalizacion", type="string", length=255, nullable=true)
     */
    private $geolocalizacion;

    /**
     * @var \Marca
     *
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marcaid", referencedColumnName="id")
     * })
     */
    private $marcaid;

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Hotel
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set geolocalizacion
     *
     * @param string $geolocalizacion
     * @return Hotel
     */
    public function setGeolocalizacion($geolocalizacion)
    {
        $this->geolocalizacion = $geolocalizacion;

        return $this;
    }

    /**
     * Get geolocalizacion
     *
     * @return string 
     */
    public function getGeolocalizacion()
    {
        return $this->geolocalizacion;
    }

    /**
     * Set marcaid
     *
     * @param \BackEndBundle\Entity\Marca $marcaid
     * @return Hotel
     */
    public function setMarcaid(\BackEndBundle\Entity\Marca $marcaid = null)
    {
        $this->marcaid = $marcaid;

        return $this;
    }

    /**
     * Get marcaid
     *
     * @return \BackEndBundle\Entity\Marca 
     */
    public function getMarcaid()
    {
        return $this->marcaid;
    }

    /**
     * @return int
     */
    public function getIdSistema()
    {
        return $this->id_sistema;
    }

    /**
     * @param int $id_sistema
     */
    public function setIdSistema($id_sistema)
    {
        $this->id_sistema = $id_sistema;
    }
}
