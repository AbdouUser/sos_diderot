<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * staff
 *
 * @ORM\Table(name="staff")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\staffRepository")
 */
class staff implements UserInterface
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=25, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="psw", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="ufr", type="string", length=50, nullable=false)
     */
    private $ufr;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=25)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=25)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="university", type="string", length=100)
     */
    private $university;


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
     * Set name
     *
     * @param string $name
     *
     * @return staff
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
     * @return staff
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
     * Set ufr
     *
     * @param integer $ufr
     *
     * @return staff
     */
    public function setUfr($ufr)
    {
        $this->ufr = $ufr;

        return $this;
    }

    public function getUniversityPlain() {
        $univs = [
            'p7' => 'Université Paris Diderot',
            'p6' => 'Université Paris Descarte',
            'p5' => 'Institut de Physique du Globe de Paris',
        ];

        return $univs[$this->university];
    }

    public function getJobPlain() {
        $jobs = [
            'secr' => 'secretaire',
            'prof' => 'Professeur',
            'resp' => 'responsable pédagogique',
            'resp' => 'Médecin',
            'resp' => 'Infirmier',
        ];

        return $jobs[$this->job];
    }

    public function getServicePlain() {
        $servs = [
            'soci' => 'Social',
            'sch' => 'Scolarité',
            'bri' => 'Relations Internationnales',
            'spr' => 'Service des sports',
            'sente' => 'Médecine de prévention',
            'ense' => 'Enseignement',
        ];

        return $servs[$this->service];
    }

    public function getUfrPlain() {
        $ufrs = [
            'inf' => 'Informatique',
            'phy' => 'Physique',
            'sci' => 'Science et nature',
            'his' => 'Histoire',
            'chi' => 'Chimie',
        ];

        return $ufrs[$this->ufr];
    }

    /**
     * Get ufr
     *
     * @return int
     */
    public function getUfr()
    {
        return $this->ufr;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return staff
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return staff
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }


    /**
     * Set email
     *
     * @param string $email
     *
     * @return staff
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
     * @return staff
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
     * Set university
     *
     * @param string $university
     *
     * @return staff
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
