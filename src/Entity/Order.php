<?php

namespace Mgd\Entity;

class Order extends Master
{
    /**
     * @var integer
     */
    private $idOrder;


    /**
     * @var \DateTime
     */
    private $orderDate;

    /**
     * @var \Mgd\Route\Order\OrderEvent
     */
    public $orderEvents;

    /**
     * @var User[]
     */
    private $followers;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }

    /**
     * @param int $idOrder
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param \DateTime $orderDate
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }



    /**
     * @return User[]
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @param User[] $followers
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;
    }

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
}
