<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion")
 * @ORM\Entity(repositoryClass="BackEndBundle\Entity\HabitacionRepository")
 */
class Habitacion
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Facilidades", mappedBy="habitacionid")
     */
    private $facilidadesid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->facilidadesid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add facilidadesid
     *
     * @param \BackEndBundle\Entity\Facilidades $facilidadesid
     * @return Habitacion
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
}
