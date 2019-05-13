<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\rdvRepository")
 */
class rdv
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
     * @ORM\Column(name="date", type="datetime", unique=true, nullable=true)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="day", type="integer")
     */
    private $day;

    /**
     * @var int
     *
     * @ORM\Column(name="hour", type="integer")
     */
    private $hour;

    /**
     * @ORM\ManyToOne(targetEntity="student")
     */
    private $student;

    /**
     * @ORM\ManyToOne(targetEntity="staff")
     */
    private $staff;


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
     * @return rdv
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
     * Set day
     *
     * @param integer $day
     *
     * @return rdv
     */
    public function setDay($day)
    {
        $this->day = $day;
    
        return $this;
    }

    /**
     * Get day
     *
     * @return integer
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set hour
     *
     * @param integer $hour
     *
     * @return rdv
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    
        return $this;
    }

    /**
     * Get hour
     *
     * @return integer
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\student $student
     *
     * @return rdv
     */
    public function setStudent(\AppBundle\Entity\student $student = null)
    {
        $this->student = $student;
    
        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Entity\student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Set staff
     *
     * @param \AppBundle\Entity\staff $staff
     *
     * @return rdv
     */
    public function setStaff(\AppBundle\Entity\staff $staff = null)
    {
        $this->staff = $staff;
    
        return $this;
    }

    /**
     * Get staff
     *
     * @return \AppBundle\Entity\staff
     */
    public function getStaff()
    {
        return $this->staff;
    }
}
