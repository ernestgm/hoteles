<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * PrivilegeCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\PrivilegeCategoryRepository")
 * @UniqueEntity(fields = {"name"})
 *
 */
class PrivilegeCategory
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
     * @var \Doctrine\Common\Collections\Collection
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\PrivilegeSubCategory", mappedBy="category", cascade={"all"})
     */
    protected $subcategories;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;


    public function __construct()
    {
        $this->subcategories = new ArrayCollection();
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
     * @return PrivilegeCategory
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
     * @return PrivilegeCategory
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
     * Add subcategory
     *
     * @param \UserBundle\Entity\PrivilegeSubCategory $subcategory
     *
     * @return PrivilegeCategory
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
