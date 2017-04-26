<?php

namespace Mgd\Entity;

class Operation extends Master
{

    const SALE_TYPE = "sale";
    const PURCHASE_TYPE = "purchase";
    const CORRECTION_TYPE = "correction";
    /**
     * @var integer
     *
     */
    private $idOperation;


    /**
     * @var string
     */
    private $type;

    /**
     * @var Order
     *
     */
    private $order;

    /**
     * @return int
     */
    public function getIdOperation()
    {
        return $this->idOperation;
    }

    /**
     * @param int $idOperation
     */
    public function setIdOperation($idOperation)
    {
        $this->idOperation = $idOperation;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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



}
