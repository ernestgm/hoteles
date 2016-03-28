<?php

namespace UserBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use UserBundle\Entity\User;


/**
 * role
 *
 * @ORM\Table()
 * @UniqueEntity(fields = {"name"})
 * @ORM\Entity(repositoryClass="UserBundle\Entity\RoleRepository")
 *
 */
class Role implements RoleInterface
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
     * * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Privilege", inversedBy="roles")
     */
    private $privileges;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\PrivilegeSubCategory", inversedBy="roles")
     * @ORM\JoinTable(name="role_subcategories")
     */
    private $subcategories;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\User", mappedBy="userRoles")
     */
    private $users;

    /**
     * @ORM\Column(type="boolean", options={"default": true} )
     */
    private $active;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->privileges = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    public function getRole()
    {
        return $this->getName();
    }

    /**
     * Add privileges.
     *
     * @param Privilege $privilege
     *
     * @return role
     */
    public function addPrivilege(Privilege $privilege)
    {
        $this->privileges[] = $privilege;

        return $this;
    }

    /**
     * Remove Privilege
     *
     * @param privilege $privilege
     */
    public function removePrivilege(Privilege $privilege)
    {
        $this->privileges->removeElement($privilege);
    }

    /**
     * Get rights.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }

    /**
     * Get rights.
     *
     * @return bool
     */

    public function hasPrivilege(Privilege $privilege = null)
    {
        if ($privilege) {
            foreach ($this->privileges as $mprivilege) {
                if ($mprivilege === $privilege) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users->toArray();
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return role
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Add subcategory
     *
     * @param \UserBundle\Entity\PrivilegeSubCategory $subcategory
     *
     * @return role
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

    /**
     * Add user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return role
     */
    public function addUser(\UserBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \UserBundle\Entity\User $user
     */
    public function removeUser(\UserBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }
}
