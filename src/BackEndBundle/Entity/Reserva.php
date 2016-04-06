<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="reserva")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\ReservaRepository")
 */
class Reserva
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
     * @ORM\Column(name="codigo", type="string", length=255, nullable=true)
     */
    private $codigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_reserva", type="datetime", nullable=true)
     */
    private $fechaReserva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrada", type="datetime", nullable=true)
     */
    private $fechaEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="datetime", nullable=true)
     */
    private $fechaSalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneda", type="integer", nullable=true)
     */
    private $moneda;

    /**
     * @var float
     *
     * @ORM\Column(name="monto", type="float", precision=10, scale=0, nullable=true)
     */
    private $monto;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_reserva", type="integer", nullable=true)
     */
    private $estadoReserva;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_pago", type="integer", nullable=true)
     */
    private $estadoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="agencia", type="string", length=255, nullable=true)
     */
    private $agencia;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="text", nullable=true)
     */
    private $cliente;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel",inversedBy="reserva")
     * @ORM\JoinColumn(name="hotelcodigo",referencedColumnName="codigo")
     */
    private $hotelcodigo;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User",inversedBy="reservas")
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
     * Set codigo
     *
     * @param string $codigo
     * @return Reserva
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
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
     * Set fechaReserva
     *
     * @param \DateTime $fechaReserva
     * @return Reserva
     */
    public function setFechaReserva($fechaReserva)
    {
        $this->fechaReserva = $fechaReserva;

        return $this;
    }

    /**
     * Get fechaReserva
     *
     * @return \DateTime 
     */
    public function getFechaReserva()
    {
        return $this->fechaReserva;
    }

    /**
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     * @return Reserva
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return Reserva
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set moneda
     *
     * @param integer $moneda
     * @return Reserva
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return integer 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set monto
     *
     * @param float $monto
     * @return Reserva
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set estadoReserva
     *
     * @param integer $estadoReserva
     * @return Reserva
     */
    public function setEstadoReserva($estadoReserva)
    {
        $this->estadoReserva = $estadoReserva;

        return $this;
    }

    /**
     * Get estadoReserva
     *
     * @return integer 
     */
    public function getEstadoReserva()
    {
        return $this->estadoReserva;
    }

    /**
     * Set estadoPago
     *
     * @param integer $estadoPago
     * @return Reserva
     */
    public function setEstadoPago($estadoPago)
    {
        $this->estadoPago = $estadoPago;

        return $this;
    }

    /**
     * Get estadoPago
     *
     * @return integer 
     */
    public function getEstadoPago()
    {
        return $this->estadoPago;
    }

    /**
     * Set agencia
     *
     * @param string $agencia
     * @return Reserva
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;

        return $this;
    }

    /**
     * Get agencia
     *
     * @return string 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Reserva
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set hotelcodigo
     *
     * @param \BackEndBundle\Entity\Hotel $hotelcodigo
     * @return Reserva
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
     * @return Reserva
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
