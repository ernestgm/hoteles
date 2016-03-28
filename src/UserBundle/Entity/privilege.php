<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Privilege
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\PrivilegeRepository")
 * @UniqueEntity(fields = {"name"})
 *
 */
class Privilege
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\PrivilegeSubCategory", inversedBy="privileges")
     * @ORM\JoinTable(name="privilege_subcategories")
     */
    private $subcategories;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $route;

    /**
     * @ORM\ManyToMany(targetEntity="Role", mappedBy="privileges")
     */
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     * @return card
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return service
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set route
     *
     * @param string $route
     * @return Privilege
     */
    public function setRoute($route)
    {
        $this->route = $route;
        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }


    /**
     * Add role
     *
     * @param \UserBundle\Entity\role $role
     *
     * @return Privilege
     */
    public function addRole(\UserBundle\Entity\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \UserBundle\Entity\role $role
     */
    public function removeRole(\UserBundle\Entity\Role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Add subcategory
     *
     * @param \UserBundle\Entity\PrivilegeSubCategory $subcategory
     *
     * @return Privilege
     */
    public function addSubcategory(\UserBundle\Entity\PrivilegeSubCategory $subcategory)
    {
        $this->subcategories[] = $subcategory;

        return $this;
    }

    /**
     * Remove subcategory
     *
     * @param \UserBundle\Entity\PrivilegeSubCategory $subcategory
     */
    public function removeSubcategory(\UserBundle\Entity\PrivilegeSubCategory $subcategory)
    {
        $this->subcategories->removeElement($subcategory);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
}
