<?php

namespace Mgd\Entity;

class Order extends Master
{
    /**
     * @var integer
     */
    private $idOrder;


    /**
     * @var string
     */
    private $orderDate;

    /**
     * @var \Mgd\Route\Order\OrderEvent
     */
    public $orderEvent;

    /**
     * @var User[]
     */
    private $followers;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Firm
     *
     */
    private $purchaser;

    /**
     * @var Firm
     */
    private $seller;

    /**
     * @var User
     */
    private $leadUser;

    /**
     * @return Firm
     */
    public function getPurchaser()
    {
        return $this->purchaser;
    }

    /**
     * @param Firm $purchaser
     */
    public function setPurchaser($purchaser)
    {
        $this->purchaser = $purchaser;
    }

    /**
     * @return Firm
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Firm $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }

    /**
     * @return User
     */
    public function getLeadUser()
    {
        return $this->leadUser;
    }

    /**
     * @param User $leadUser
     */
    public function setLeadUser($leadUser)
    {
        $this->leadUser = $leadUser;
    }


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
