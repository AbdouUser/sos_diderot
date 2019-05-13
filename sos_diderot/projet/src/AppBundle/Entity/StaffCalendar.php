<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StaffCalendar
 *
 * @ORM\Table(name="staff_calendar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StaffCalendarRepository")
 */
class StaffCalendar
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
     * @ORM\ManyToOne(targetEntity="calendar")
     */
    private $calendar;

    /**
     * @ORM\ManyToOne(targetEntity="staff")
     */
    private $staff;


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
     * Set calendar
     *
     * @param string $calendar
     *
     * @return StaffCalendar
     */
    public function setCalendar($calendar)
    {
        $this->calendar = $calendar;
    
        return $this;
    }

    /**
     * Get calendar
     *
     * @return string
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * Set staff
     *
     * @param string $staff
     *
     * @return StaffCalendar
     */
    public function setStaff($staff)
    {
        $this->staff = $staff;
    
        return $this;
    }

    /**
     * Get staff
     *
     * @return string
     */
    public function getStaff()
    {
        return $this->staff;
    }
}

