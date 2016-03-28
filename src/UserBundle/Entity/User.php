<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Symfony\Component\Validator\Constraints as Assert;
use UserBundle\Entity\Role;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    protected $avatar;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $phone;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $movil;

    /**
     * @ORM\ManyToOne(targetEntity="BackEndBundle\Entity\Country",inversedBy="")
     * @ORM\JoinColumn(name="country_id",referencedColumnName="id", nullable=true)
     */
    protected $country;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\Role", inversedBy="users")
     */
    private $userRoles;

    public function __construct()
    {
        parent::__construct();
        $this->userRoles = new ArrayCollection();
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname){
        $this->lastname = $lastname;
    }

    public function getFullName(){
        $fullname= $this->getName().' '.$this->getLastname();
        if(trim($fullname)== ''){
            $fullname= $this->getEmail();
        }
        return $fullname;
    }

    #region Security

    public function setUserRoles($roles)
    {
        $this->userRoles = $roles;
    }

    public function getUserRoles()
    {
        return $this->userRoles;
    }

    public function getRoles()
    {
        if($this->userRoles){
            $all_roles= $this->userRoles->toArray();
            return $all_roles;
        } else
            return array();

//        $role_default= new Role(parent::ROLE_DEFAULT);
//
//        if($this->userRoles){
//            $all_roles= array_merge($this->userRoles->toArray(), array($role_default));
//            dump($role_default);exit;
//            return $all_roles;
//        } else
//            return array($role_default);
    }

    public function getRolesNames()
    {
        $roles_name= array();
        foreach($this->userRoles as $rol){
            $roles_name[]= $rol->getName();
        }
        return $roles_name;
    }

    public function getRole($role)
    {
        foreach($this->getRoles() as $roleItem)
        {
            if($role == $roleItem->getRole())
            {
                return $roleItem;
            }
        }
        return null;
    }

    public function hasRole($role)
    {
        if($this->getRole($role))
        {
            return true;
        }
        return false;
    }

    public function addRole($role)
    {
        if(!$this->hasRole($role->getRole()))
        {
            $this->user_roles->add($role);
            $this->setActiveRole($role);
        }
    }

    public function removeRole($role)
    {
        $roleElement = $this->getRole($role);
        if($roleElement)
        {
            $this->user_roles->removeElement($roleElement);
            $this->active_role = $this->user_roles->first() ? $this->user_roles->first() : new Role(parent::ROLE_DEFAULT);
        }
    }

    public function setRoles(array $roles)
    {
        $this->userRoles->clear();
        foreach($roles as $role)
        {
            $this->addRole($role);
        }
    }

    public function setRolesCollection(Collection $collection)
    {
        $this->userRoles = $collection;
    }

    public function addUserRole(Role $userRole)
    {
        $this->userRoles[] = $userRole;

        return $this;
    }

    public function removeUserRole(RoleInterface $userRoles)
    {
        $this->userRoles->removeElement($userRoles);
    }

    public function getUserPrivileges()
    {
        $result = array();
        foreach($this->userRoles as $userRole)
        {
            #region Ignore inactive rol
            if (!$userRole->getActive())
                continue;
            #endregion

            $privileges = $userRole->getPrivileges();
            foreach($privileges as $privilege)
            {
                if(!in_array($privilege->getRoute(), $result))
                    $result[] = $privilege->getRoute();
            }

            $subCategories= $userRole->getSubcategories();
            foreach($subCategories as $subCategory){
                $privileges = $subCategory->getPrivileges();
                foreach($privileges as $privilege)
                {
                    if(!in_array($privilege->getRoute(), $result))
                        $result[] = $privilege->getRoute();
                }
            }
        }
        return $result;
    }
    public function setMyCpSalt(){
        $this->salt='222';
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {
        if($this->avatar!='Null' && $this->avatar!='')
            return '/uploads/archivos/'.$this->avatar;
        else{
            $source_path= '/bundles/user/images/avatar/';
            $path= $source_path.'default.png';
            return $path;
        }
    }
    /**
     * {@inheritDoc}
     */
    public function getRealAvatar()
    {
        return $this->avatar;
    }
    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function getMovil(){
        return $this->movil;
    }

    public function setMovil($movil){
        $this->movil = $movil;
    }
    /**
     * Set country
     *
     * @param \BackendBundle\Entity\country $country
     *
     * @return user
     */
    public function setCountry(\BackEndBundle\Entity\Country $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return \BackendBundle\Entity\country
     */
    public function getCountry()
    {
        return $this->country;
    }
}