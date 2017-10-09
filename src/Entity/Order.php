<?php

namespace Mgd\Entity;

class Order extends Master
{

    /**
     * @var \Mgd\Route\Order\OrderProduct
     */
    public $orderProducts;

    /**
     * @var \Mgd\Route\Order\Package
     */
    public $packages;

    /**
     * @var \Mgd\Route\Order\AlEvent
     */
    public $alEvents;

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
    private $saleUser;


    /**
     * @var User[]
     */
    private $followers;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @return string
     */
    public function getEventPhone()
    {
        return $this->eventPhone;
    }

    /**
     * @param string $eventPhone
     */
    public function setEventPhone($eventPhone)
    {
        $this->eventPhone = $eventPhone;
    }

    /**
     * @var string
     */
    private $eventPhone;

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @var string
     */
    private $eventName;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $invoiceNumber;


    /**
     * @var string
     */
    private $comment;

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }


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
    private $shippingDate;

    /**
     * @return User
     */
    public function getSaleUser()
    {
        return $this->saleUser;
    }

    /**
     * @param User $saleUser
     */
    public function setSaleUser($saleUser)
    {
        $this->saleUser = $saleUser;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @var float
     */
    private $total;


    /**
     * @var float
     */
    private $totalHT;

    /**
     * @var float
     */
    private $totalVAT;


    /**
     * @var float
     */
    private $discount;

    /**
     * @var float
     */
    private $discountType;

    /**
     * @var float
     */
    private $deliveryCharge;

    /**
     * @return float
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @param float $discountType
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
    }

    /**
     * @return float
     */
    public function getTotalHT()
    {
        return $this->totalHT;
    }

    /**
     * @param float $totalHT
     */
    public function setTotalHT($totalHT)
    {
        $this->totalHT = $totalHT;
    }

    /**
     * @return float
     */
    public function getTotalVAT()
    {
        return $this->totalVAT;
    }

    /**
     * @param float $totalVAT
     */
    public function setTotalVAT($totalVAT)
    {
        $this->totalVAT = $totalVAT;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return float
     */
    public function getDeliveryCharge()
    {
        return $this->deliveryCharge;
    }

    /**
     * @param float $deliveryCharge
     */
    public function setDeliveryCharge($deliveryCharge)
    {
        $this->deliveryCharge = $deliveryCharge;
    }

    /**
     * @var string
     */
    private $orderReference;

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
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @param $followers
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;
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

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return Order
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return Order
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }
}
