<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="FKhotel146676", columns={"marcaid"}), @ORM\Index(name="FKhotel802242", columns={"comentariosid"}), @ORM\Index(name="FKhotel432874", columns={"redes_socialesid"}), @ORM\Index(name="FKhotel524105", columns={"gastronomiaid"}), @ORM\Index(name="FKhotel414066", columns={"motivosid"}), @ORM\Index(name="FKhotel773210", columns={"faqid"})})
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
     * @var \Motivos
     *
     * @ORM\ManyToOne(targetEntity="Motivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="motivosid", referencedColumnName="id")
     * })
     */
    private $motivosid;

    /**
     * @var \RedesSociales
     *
     * @ORM\ManyToOne(targetEntity="RedesSociales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="redes_socialesid", referencedColumnName="id")
     * })
     */
    private $redesSocialesid;

    /**
     * @var \Gastronomia
     *
     * @ORM\ManyToOne(targetEntity="Gastronomia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gastronomiaid", referencedColumnName="id")
     * })
     */
    private $gastronomiaid;

    /**
     * @var \Faq
     *
     * @ORM\ManyToOne(targetEntity="Faq")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="faqid", referencedColumnName="id")
     * })
     */
    private $faqid;

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
     * @ORM\ManyToMany(targetEntity="Hofacilidades", mappedBy="hotelcodigo")
     */
    private $hofacilidadesid;

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
        $this->hofacilidadesid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->serviciosid = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set motivosid
     *
     * @param \BackEndBundle\Entity\Motivos $motivosid
     * @return Hotel
     */
    public function setMotivosid(\BackEndBundle\Entity\Motivos $motivosid = null)
    {
        $this->motivosid = $motivosid;

        return $this;
    }

    /**
     * Get motivosid
     *
     * @return \BackEndBundle\Entity\Motivos 
     */
    public function getMotivosid()
    {
        return $this->motivosid;
    }

    /**
     * Set redesSocialesid
     *
     * @param \BackEndBundle\Entity\RedesSociales $redesSocialesid
     * @return Hotel
     */
    public function setRedesSocialesid(\BackEndBundle\Entity\RedesSociales $redesSocialesid = null)
    {
        $this->redesSocialesid = $redesSocialesid;

        return $this;
    }

    /**
     * Get redesSocialesid
     *
     * @return \BackEndBundle\Entity\RedesSociales 
     */
    public function getRedesSocialesid()
    {
        return $this->redesSocialesid;
    }

    /**
     * Set gastronomiaid
     *
     * @param \BackEndBundle\Entity\Gastronomia $gastronomiaid
     * @return Hotel
     */
    public function setGastronomiaid(\BackEndBundle\Entity\Gastronomia $gastronomiaid = null)
    {
        $this->gastronomiaid = $gastronomiaid;

        return $this;
    }

    /**
     * Get gastronomiaid
     *
     * @return \BackEndBundle\Entity\Gastronomia 
     */
    public function getGastronomiaid()
    {
        return $this->gastronomiaid;
    }

    /**
     * Set faqid
     *
     * @param \BackEndBundle\Entity\Faq $faqid
     * @return Hotel
     */
    public function setFaqid(\BackEndBundle\Entity\Faq $faqid = null)
    {
        $this->faqid = $faqid;

        return $this;
    }

    /**
     * Get faqid
     *
     * @return \BackEndBundle\Entity\Faq 
     */
    public function getFaqid()
    {
        return $this->faqid;
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
     * Add hofacilidadesid
     *
     * @param \BackEndBundle\Entity\Hofacilidades $hofacilidadesid
     * @return Hotel
     */
    public function addHofacilidadesid(\BackEndBundle\Entity\Hofacilidades $hofacilidadesid)
    {
        $this->hofacilidadesid[] = $hofacilidadesid;

        return $this;
    }

    /**
     * Remove hofacilidadesid
     *
     * @param \BackEndBundle\Entity\Hofacilidades $hofacilidadesid
     */
    public function removeHofacilidadesid(\BackEndBundle\Entity\Hofacilidades $hofacilidadesid)
    {
        $this->hofacilidadesid->removeElement($hofacilidadesid);
    }

    /**
     * Get hofacilidadesid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHofacilidadesid()
    {
        return $this->hofacilidadesid;
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
