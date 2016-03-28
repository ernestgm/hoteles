<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * PrivilegeSubCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\PrivilegeSubCategoryRepository")
 * @UniqueEntity(fields = {"name"})
 *
 */
class PrivilegeSubCategory
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
     * @var \UserBundle\Entity\PrivilegeCategory
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\PrivilegeCategory",inversedBy="subcategories")
     * @Assert\NotBlank()
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\Privilege", mappedBy="subcategories")
     */
    protected $privileges;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\role", mappedBy="subcategories")
     */
    protected $roles;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;


    public function __construct()
    {
        $this->privileges = new ArrayCollection();
    }

    public function __toString(){
        return $this->getName();
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
     *
     * @return PrivilegeSubCategory
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
     *
     * @return PrivilegeSubCategory
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
     * Set category
     *
     * @param \UserBundle\Entity\PrivilegeCategory $category
     *
     * @return PrivilegeSubCategory
     */
    public function setCategory(\UserBundle\Entity\PrivilegeCategory $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \UserBundle\Entity\PrivilegeCategory
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Add Privilege
     *
     * @param \UserBundle\Entity\Privilege $privilege
     *
     * @return PrivilegeSubCategory
     */
    public function addPrivilege(\UserBundle\Entity\Privilege $privilege)
    {
        $this->privileges[] = $privilege;
        return $this;
    }

    /**
     * Remove Privilege
     *
     * @param \UserBundle\Entity\Privilege $privilege
     */
    public function removePrivilege(\UserBundle\Entity\Privilege $privilege)
    {
        $this->privileges->removeElement($privilege);
    }

    /**
     * Get Privileges
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }

    /**
     * Add role
     *
     * @param \UserBundle\Entity\role $role
     *
     * @return PrivilegeSubCategory
     */
    public function addRole(\UserBundle\Entity\role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \UserBundle\Entity\role $role
     */
    public function removeRole(\UserBundle\Entity\role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
