<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * calendar
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\calendarRepository")
 */
class calendar
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", unique=true)
     */
    private $date;
   
    /**
     * @var boolean
     *
     * @ORM\Column(name="isHere", type="boolean")
     */
    private $isHere;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return calendar
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set isHere
     *
     * @param boolean $isHere
     *
     * @return calendar
     */
    public function setIsHere($isHere)
    {
        $this->isHere = $isHere;

        return $this;
    }

    /**
     * Get isHere
     *
     * @return boolean
     */
    public function getIsHere()
    {
        return $this->isHere;
    }
}