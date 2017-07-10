<?php

namespace Mgd\Entity;

class Package extends Master
{

    /**
     * @var \Mgd\Route\Package\Event
     */
    public $events;

    /**
     * @var integer
     *
     */
    private $idPackage;

    /**
     * @var string
     *
     */
    private $trackingNumber;

    /**
     * @var string
     *
     */
    private $shippingDate;

    /**
     * @var OrderEvent
     */
    private $orderEvent;

    /**
     * @var integer
     *
     */
    private $type;

    /**
     * @return Event
     */
    public function getActiveEvent()
    {
        return $this->activeEvent;
    }

    /**
     * @param Event $activeEvent
     */
    public function setActiveEvent($activeEvent)
    {
        $this->activeEvent = $activeEvent;
    }

    /**
     * @var Event
     */
    private $activeEvent;

    /**
     * @return int
     */
    public function getIdPackage()
    {
        return $this->idPackage;
    }

    /**
     * @param int $idPackage
     */
    public function setIdPackage($idPackage)
    {
        $this->idPackage = $idPackage;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @return string
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param string $shippingDate
     */
    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return OrderEvent
     */
    public function getOrderEvent()
    {
        return $this->orderEvent;
    }

    /**
     * @param OrderEvent $orderEvent
     */
    public function setOrderEvent($orderEvent)
    {
        $this->orderEvent = $orderEvent;
    }


}
