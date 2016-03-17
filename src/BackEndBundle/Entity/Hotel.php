<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="FKhotel146676", columns={"marcaid"}), @ORM\Index(name="FKhotel802242", columns={"comentariosid"})})
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\HotelRepository")
 */
class Hotel
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

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
     * @var \Comentarios
     *
     * @ORM\ManyToOne(targetEntity="Comentarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comentariosid", referencedColumnName="id")
     * })
     */
    private $comentariosid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Facilidades", mappedBy="hotelcodigo")
     */
    private $facilidadesid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Gastronomia", mappedBy="hotelcodigo")
     */
    private $gastronomiaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Motivos", mappedBy="hotelcodigo")
     */
    private $motivosid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Servicios", mappedBy="hotelcodigo")
     */
    private $serviciosid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->facilidadesid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->gastronomiaid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->motivosid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->serviciosid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codigo
     *
     * @return string 
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
     * Set comentariosid
     *
     * @param \BackEndBundle\Entity\Comentarios $comentariosid
     * @return Hotel
     */
    public function setComentariosid(\BackEndBundle\Entity\Comentarios $comentariosid = null)
    {
        $this->comentariosid = $comentariosid;

        return $this;
    }

    /**
     * Get comentariosid
     *
     * @return \BackEndBundle\Entity\Comentarios 
     */
    public function getComentariosid()
    {
        return $this->comentariosid;
    }

    /**
     * Add facilidadesid
     *
     * @param \BackEndBundle\Entity\Facilidades $facilidadesid
     * @return Hotel
     */
    public function addFacilidadesid(\BackEndBundle\Entity\Facilidades $facilidadesid)
    {
        $this->facilidadesid[] = $facilidadesid;

        return $this;
    }

    /**
     * Remove facilidadesid
     *
     * @param \BackEndBundle\Entity\Facilidades $facilidadesid
     */
    public function removeFacilidadesid(\BackEndBundle\Entity\Facilidades $facilidadesid)
    {
        $this->facilidadesid->removeElement($facilidadesid);
    }

    /**
     * Get facilidadesid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFacilidadesid()
    {
        return $this->facilidadesid;
    }

    /**
     * Add gastronomiaid
     *
     * @param \BackEndBundle\Entity\Gastronomia $gastronomiaid
     * @return Hotel
     */
    public function addGastronomiaid(\BackEndBundle\Entity\Gastronomia $gastronomiaid)
    {
        $this->gastronomiaid[] = $gastronomiaid;

        return $this;
    }

    /**
     * Remove gastronomiaid
     *
     * @param \BackEndBundle\Entity\Gastronomia $gastronomiaid
     */
    public function removeGastronomiaid(\BackEndBundle\Entity\Gastronomia $gastronomiaid)
    {
        $this->gastronomiaid->removeElement($gastronomiaid);
    }

    /**
     * Get gastronomiaid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGastronomiaid()
    {
        return $this->gastronomiaid;
    }

    /**
     * Add motivosid
     *
     * @param \BackEndBundle\Entity\Motivos $motivosid
     * @return Hotel
     */
    public function addMotivosid(\BackEndBundle\Entity\Motivos $motivosid)
    {
        $this->motivosid[] = $motivosid;

        return $this;
    }

    /**
     * Remove motivosid
     *
     * @param \BackEndBundle\Entity\Motivos $motivosid
     */
    public function removeMotivosid(\BackEndBundle\Entity\Motivos $motivosid)
    {
        $this->motivosid->removeElement($motivosid);
    }

    /**
     * Get motivosid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMotivosid()
    {
        return $this->motivosid;
    }

    /**
     * Add serviciosid
     *
     * @param \BackEndBundle\Entity\Servicios $serviciosid
     * @return Hotel
     */
    public function addServiciosid(\BackEndBundle\Entity\Servicios $serviciosid)
    {
        $this->serviciosid[] = $serviciosid;

        return $this;
    }

    /**
     * Remove serviciosid
     *
     * @param \BackEndBundle\Entity\Servicios $serviciosid
     */
    public function removeServiciosid(\BackEndBundle\Entity\Servicios $serviciosid)
    {
        $this->serviciosid->removeElement($serviciosid);
    }

    /**
     * Get serviciosid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServiciosid()
    {
        return $this->serviciosid;
    }
}
