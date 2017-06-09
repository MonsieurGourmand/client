<?php

namespace Mgd\Entity;

class Operation extends Master
{
    /**
     * @var \Mgd\Route\Operation\Task
     */
    public $tasks;

    /**
     * @var integer
     *
     */
    private $idOperation;

    /**
     * @var Order
     *
     */
    private $order;

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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
