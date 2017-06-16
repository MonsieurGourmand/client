<?php

namespace Mgd\Entity;

class Event extends Master
{



    /**
     * @var integer
     *
     */
    private $idEvent;

    /**
     * @var Package
     *
     */
    private $package;

    /**
     * @var Order
     *
     */
    private $order;

    /**
     * @var string
     *
     */
    private $eventDate;

    /**
     * @var string
     *
     */
    private $eventLabel;

    /**
     * @var string
     *
     */
    private $code;

    /**
     * @var integer
     *
     */
    private $active;

    /**
     * @return int
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param int $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param Package $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param string $eventDate
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * @return string
     */
    public function getEventLabel()
    {
        return $this->eventLabel;
    }

    /**
     * @param string $eventLabel
     */
    public function setEventLabel($eventLabel)
    {
        $this->eventLabel = $eventLabel;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}
