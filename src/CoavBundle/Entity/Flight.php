<?php

namespace CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 */
class Flight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeoffTime;


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
     * Set departure
     *
     * @param string $departure
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string 
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string 
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string 
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer 
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeoffTime
     *
     * @param \DateTime $takeoffTime
     * @return Flight
     */
    public function setTakeoffTime($takeoffTime)
    {
        $this->takeoffTime = $takeoffTime;

        return $this;
    }

    /**
     * Get takeoffTime
     *
     * @return \DateTime 
     */
    public function getTakeoffTime()
    {
        return $this->takeoffTime;
    }
    /**
     * @var \CoavBundle\Entity\PlaneModel
     */
    private $planeModle;


    /**
     * Set planeModle
     *
     * @param \CoavBundle\Entity\PlaneModel $planeModle
     * @return Flight
     */
    public function setPlaneModle(\CoavBundle\Entity\PlaneModel $planeModle = null)
    {
        $this->planeModle = $planeModle;

        return $this;
    }

    /**
     * Get planeModle
     *
     * @return \CoavBundle\Entity\PlaneModel 
     */
    public function getPlaneModle()
    {
        return $this->planeModle;
    }
    /**
     * @var \CoavBundle\Entity\Flight
     */
    private $Flight;


    /**
     * Set Flight
     *
     * @param \CoavBundle\Entity\Flight $flight
     * @return Flight
     */
    public function setFlight(\CoavBundle\Entity\Flight $flight = null)
    {
        $this->Flight = $flight;

        return $this;
    }

    /**
     * Get Flight
     *
     * @return \CoavBundle\Entity\Flight 
     */
    public function getFlight()
    {
        return $this->Flight;
    }
}
