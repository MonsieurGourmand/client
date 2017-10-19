<?php

namespace Mgd\Entity;

class Package extends Master
{
    /**
     * @var integer
     */
    private $idPackage;

    /**
     * @var integer
     */
    private $trackingNumber;

    /**
     * @var \DateTime
     */
    private $shippingDate;

    /**
     * @var integer
     */
    private $type;


    /**
     * @var OpeEvent
     */
    private $opeEvent;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @return int
     */
    public function getIdPackage()
    {
        return $this->idPackage;
    }

    /**
     * @return int
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param int $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @return \DateTime
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param \DateTime $shippingDate
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
     * @return mixed
     */
    public function getOpeEvent()
    {
        return $this->opeEvent;
    }

    /**
     * @param mixed $opeEvent
     */
    public function setOpeEvent($opeEvent)
    {
        $this->opeEvent = $opeEvent;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}
