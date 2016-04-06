<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

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
     * @ORM\ManyToOne(targetEntity="Marca",cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marcaid", referencedColumnName="id")
     * })
     */
    private $marcaid;

    /**
     * @ORM\OneToMany(targetEntity="Motivos",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $motivos;

    /**
     * @ORM\OneToMany(targetEntity="Servicios",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $servicios;

    /**
     * @ORM\OneToMany(targetEntity="Reserva",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $reserva;

    /**
     * @ORM\OneToMany(targetEntity="Comentarios",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $comentarios;

    /**
     * @ORM\OneToMany(targetEntity="Gastronomia",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $gastronomia;

    /**
     * @ORM\OneToMany(targetEntity="Habitacion",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $tipoHabitacion;

    /**
     * @ORM\OneToMany(targetEntity="RedesSociales",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $redesSociales;

    /**
     * @ORM\OneToMany(targetEntity="Faq",cascade={"persist"},mappedBy="hotelcodigo")
     */
    private $faqs;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->motivos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comentarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->faqs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->gastronomia = new \Doctrine\Common\Collections\ArrayCollection();
        $this->redesSociales = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reserva = new \Doctrine\Common\Collections\ArrayCollection();
        $this->servicios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tipoHabitacion = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add motivos
     *
     * @param \BackEndBundle\Entity\Motivos $motivos
     * @return Hotel
     */
    public function addMotivo(\BackEndBundle\Entity\Motivos $motivos)
    {
        $this->motivos[] = $motivos;

        return $this;
    }

    /**
     * Remove motivos
     *
     * @param \BackEndBundle\Entity\Motivos $motivos
     */
    public function removeMotivo(\BackEndBundle\Entity\Motivos $motivos)
    {
        $this->motivos->removeElement($motivos);
    }

    /**
     * Get motivos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMotivos()
    {
        return $this->motivos;
    }

    /**
     * Add servicios
     *
     * @param \BackEndBundle\Entity\Servicios $servicios
     * @return Hotel
     */
    public function addServicio(\BackEndBundle\Entity\Servicios $servicios)
    {
        $this->servicios[] = $servicios;

        return $this;
    }

    /**
     * Remove servicios
     *
     * @param \BackEndBundle\Entity\Servicios $servicios
     */
    public function removeServicio(\BackEndBundle\Entity\Servicios $servicios)
    {
        $this->servicios->removeElement($servicios);
    }

    /**
     * Get servicios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServicios()
    {
        return $this->servicios;
    }

    /**
     * Add reserva
     *
     * @param \BackEndBundle\Entity\Reserva $reserva
     * @return Hotel
     */
    public function addReserva(\BackEndBundle\Entity\Reserva $reserva)
    {
        $this->reserva[] = $reserva;

        return $this;
    }

    /**
     * Remove reserva
     *
     * @param \BackEndBundle\Entity\Reserva $reserva
     */
    public function removeReserva(\BackEndBundle\Entity\Reserva $reserva)
    {
        $this->reserva->removeElement($reserva);
    }

    /**
     * Get reserva
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReserva()
    {
        return $this->reserva;
    }

    /**
     * Add comentarios
     *
     * @param \BackEndBundle\Entity\Comentarios $comentarios
     * @return Hotel
     */
    public function addComentario(\BackEndBundle\Entity\Comentarios $comentarios)
    {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \BackEndBundle\Entity\Comentarios $comentarios
     */
    public function removeComentario(\BackEndBundle\Entity\Comentarios $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Add gastronomia
     *
     * @param \BackEndBundle\Entity\Gastronomia $gastronomia
     * @return Hotel
     */
    public function addGastronomium(\BackEndBundle\Entity\Gastronomia $gastronomia)
    {
        $this->gastronomia[] = $gastronomia;

        return $this;
    }

    /**
     * Remove gastronomia
     *
     * @param \BackEndBundle\Entity\Gastronomia $gastronomia
     */
    public function removeGastronomium(\BackEndBundle\Entity\Gastronomia $gastronomia)
    {
        $this->gastronomia->removeElement($gastronomia);
    }

    /**
     * Get gastronomia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGastronomia()
    {
        return $this->gastronomia;
    }

    /**
     * Add tipoHabitacion
     *
     * @param \BackEndBundle\Entity\Habitacion $tipoHabitacion
     * @return Hotel
     */
    public function addTipoHabitacion(\BackEndBundle\Entity\Habitacion $tipoHabitacion)
    {
        $this->tipoHabitacion[] = $tipoHabitacion;

        return $this;
    }

    /**
     * Remove tipoHabitacion
     *
     * @param \BackEndBundle\Entity\Habitacion $tipoHabitacion
     */
    public function removeTipoHabitacion(\BackEndBundle\Entity\Habitacion $tipoHabitacion)
    {
        $this->tipoHabitacion->removeElement($tipoHabitacion);
    }

    /**
     * Get tipoHabitacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTipoHabitacion()
    {
        return $this->tipoHabitacion;
    }

    /**
     * Add redesSociales
     *
     * @param \BackEndBundle\Entity\RedesSociales $redesSociales
     * @return Hotel
     */
    public function addRedesSociale(\BackEndBundle\Entity\RedesSociales $redesSociales)
    {
        $this->redesSociales[] = $redesSociales;

        return $this;
    }

    /**
     * Remove redesSociales
     *
     * @param \BackEndBundle\Entity\RedesSociales $redesSociales
     */
    public function removeRedesSociale(\BackEndBundle\Entity\RedesSociales $redesSociales)
    {
        $this->redesSociales->removeElement($redesSociales);
    }

    /**
     * Get redesSociales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRedesSociales()
    {
        return $this->redesSociales;
    }

    /**
     * Add faqs
     *
     * @param \BackEndBundle\Entity\Faq $faqs
     * @return Hotel
     */
    public function addFaq(\BackEndBundle\Entity\Faq $faqs)
    {
        $this->faqs[] = $faqs;

        return $this;
    }

    /**
     * Remove faqs
     *
     * @param \BackEndBundle\Entity\Faq $faqs
     */
    public function removeFaq(\BackEndBundle\Entity\Faq $faqs)
    {
        $this->faqs->removeElement($faqs);
    }

    /**
     * Get faqs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFaqs()
    {
        return $this->faqs;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Hotel
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
