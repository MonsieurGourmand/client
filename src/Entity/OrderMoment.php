<?php

namespace Mgd\Entity;

class OrderMoment extends Master
{

    /**
     * @var integer
     */
    private $idOrderMoment;

    /**
     * @var integer
     */
    private $type;


    /**
     * @var integer
     */
    private $pax;



    /**
     * @var \Mgd\Route\OrderMoment\OrderProduct
     */
    public $orderProduct;

    /**
     * @var OrderEvent
     */
    private $orderEvent;

    /**
     * @return mixed
     */
    public function getOrderEvent()
    {
        return $this->orderEvent;
    }

    /**
     * @param mixed $orderEvent
     */
    public function setOrderEvent($orderEvent)
    {
        $this->orderEvent = $orderEvent;
    }

    /**
     * @return int
     */
    public function getIdOrderMoment()
    {
        return $this->idOrderMoment;
    }

    /**
     * @param int $idOrderMoment
     */
    public function setIdOrderMoment($idOrderMoment)
    {
        $this->idOrderMoment = $idOrderMoment;
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
     * @return int
     */
    public function getPax()
    {
        return $this->pax;
    }

    /**
     * @param int $pax
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
    }


}
