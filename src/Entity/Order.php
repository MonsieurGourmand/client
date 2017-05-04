<?php

namespace Mgd\Entity;

class Order extends Master
{

    /**
     * @var \Mgd\Route\Order\OrderProduct
     */
    public $orderProducts;

    /**
     * @var Document
     */
    private $document;

    /**
     * @var Order
     */
    private $parent;

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
     * @var User
     */
    private $salesUser;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var \DateTime
     */
    private $orderDate;

    /**
     * @var string
     */
    private $deliveryReference;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var \DateTime
     */
    private $actualDeliveryDate;

    /**
     * @var integer
     */
    private $status = 0;

    /**
     * @var string
     */
    private $step;


    /**
     * @var integer
     */
    private $idOrder;

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * @return Order
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Order $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

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
     * @return User
     */
    public function getSalesUser()
    {
        return $this->salesUser;
    }

    /**
     * @param User $salesUser
     */
    public function setSalesUser($salesUser)
    {
        $this->salesUser = $salesUser;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
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
     * @return string
     */
    public function getDeliveryReference()
    {
        return $this->deliveryReference;
    }

    /**
     * @param string $deliveryReference
     */
    public function setDeliveryReference($deliveryReference)
    {
        $this->deliveryReference = $deliveryReference;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return \DateTime
     */
    public function getActualDeliveryDate()
    {
        return $this->actualDeliveryDate;
    }

    /**
     * @param \DateTime $actualDeliveryDate
     */
    public function setActualDeliveryDate($actualDeliveryDate)
    {
        $this->actualDeliveryDate = $actualDeliveryDate;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param string $step
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

    /**
     * @return int
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }
}
