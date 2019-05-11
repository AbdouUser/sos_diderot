<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * student
 *
 * @UniqueEntity(
 * fields={"email"},
 * errorPath="email",
 * message="It appears you have already registered with this email."
 *)
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\studentRepository")
 */
class student implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ine", type="integer", unique=true)
     */
    private $ine;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=25, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, unique=true)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=1000)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="formation", type="string", length=255)
     */
    private $formation;

    /**
     * @var string
     *
     * @ORM\Column(name="university", type="string", length=255)
     */
    private $university;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=50)
     */




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ine
     *
     * @param integer $ine
     *
     * @return student
     */
    public function setIne($ine)
    {
        $this->ine = $ine;

        return $this;
    }

    /**
     * Get ine
     *
     * @return int
     */
    public function getIne()
    {
        return $this->ine;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return student
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return student
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set formation
     *
     * @param string $formation
     *
     * @return User
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
    }


    /**
     * Set university
     *
     * @param string $university
     *
     * @return User
     */
    public function setUniversity($university)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return string
     */
    public function getUniversity()
    {
        return $this->university;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    public function getSalt(){

    }
    public function getUsername(){
      $this->email;
    }

}
