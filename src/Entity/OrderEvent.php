<?php

namespace Mgd\Entity;

class OrderEvent extends Master
{

    /**
     * @var integer
     */
    private $idOrderEvent;

    /**
     * @var Order
     */
    private $order;

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @var \Mgd\Route\OrderEvent\OrderProduct
     */
    public $orderProducts;

    /**
     * @var \Mgd\Route\OrderEvent\Package
     */
    public $packages;

    /**
     * @var \Mgd\Route\OrderEvent\AlEvent
     */
    public $alEvents;

    /**
     * @var Document
     */
    private $document;

    /**
     * @var User
     */
    private $contact;


    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $zipCode;

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
     * @var string
     */
    private $orderReference;

    /**
     * @return int
     */
    public function getIdOrderEvent()
    {
        return $this->idOrderEvent;
    }

    /**
     * @param int $idOrderEvent
     */
    public function setIdOrderEvent($idOrderEvent)
    {
        $this->idOrderEvent = $idOrderEvent;
    }

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
     * @return User
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param User $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
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
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
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
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
    }
}
