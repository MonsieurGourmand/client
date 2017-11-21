<?php

namespace Mgd\Entity;

class Purchase extends Master
{
    /**
     * @var integer
     */
    private $idPurchase;

    /**
     * @var string
     */
    private $place;

    /**
     * @var \DateTime
     */
    private $orderDate;

    /**
     * @var \DateTime
     */
    private $deliveryDate;


    /**
     * @var string
     */
    private $comment;


    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $step;

    /**
     * @var \DateTime
     */
    private $updated;


    /**
     * @var float
     */
    private $deliveryCharge;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var integer
     */
    private $discountType;

    /**
     * @var integer
     */
    private $minTva;

    /**
     * @var string
     */
    private $orderReference;

    /**
     * @var float
     */
    private $suggestDiscount;

    /**
     * @var integer
     */
    private $suggestDiscountType;

    /**
     * @var float
     */
    private $suggestDeliveryCharge;

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
    private $totalHTR;

    /**
     * @var float
     */
    private $totalVAT;

    /**
     * @var float
     */
    private $totalTax;

    /**
     * @var float
     */
    private $billingCosts;

    /**
     * @var Document
     */
    private $document;

    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * @var User
     */
    private $leadUser;

    /**
     * @var \Mgd\Route\Purchase\PurchaseProduct
     */
    public $purchaseProducts;

    /**
     * @return int
     */
    public function getIdPurchase()
    {
        return $this->idPurchase;
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
     * @return Purchase
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
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
     * @return Purchase
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
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
     * @return Purchase
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
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
     * @return Purchase
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
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
     * @return Purchase
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
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
     * @return Purchase
     */
    public function setStep($step)
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     * @return Purchase
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
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
     * @return Purchase
     */
    public function setDeliveryCharge($deliveryCharge)
    {
        $this->deliveryCharge = $deliveryCharge;
        return $this;
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
     * @return Purchase
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @param int $discountType
     * @return Purchase
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
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
     * @return Purchase
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestDiscount()
    {
        return $this->suggestDiscount;
    }

    /**
     * @param float $suggestDiscount
     * @return Purchase
     */
    public function setSuggestDiscount($suggestDiscount)
    {
        $this->suggestDiscount = $suggestDiscount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuggestDiscountType()
    {
        return $this->suggestDiscountType;
    }

    /**
     * @param int $suggestDiscountType
     * @return Purchase
     */
    public function setSuggestDiscountType($suggestDiscountType)
    {
        $this->suggestDiscountType = $suggestDiscountType;
        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestDeliveryCharge()
    {
        return $this->suggestDeliveryCharge;
    }

    /**
     * @param float $suggestDeliveryCharge
     * @return Purchase
     */
    public function setSuggestDeliveryCharge($suggestDeliveryCharge)
    {
        $this->suggestDeliveryCharge = $suggestDeliveryCharge;
        return $this;
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
     * @return Purchase
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
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
     * @return Purchase
     */
    public function setTotalHT($totalHT)
    {
        $this->totalHT = $totalHT;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalHTR()
    {
        return $this->totalHTR;
    }

    /**
     * @param float $totalHTR
     * @return Purchase
     */
    public function setTotalHTR($totalHTR)
    {
        $this->totalHTR = $totalHTR;
        return $this;
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
     * @return Purchase
     */
    public function setTotalVAT($totalVAT)
    {
        $this->totalVAT = $totalVAT;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * @param float $totalTax
     * @return Purchase
     */
    public function setTotalTax($totalTax)
    {
        $this->totalTax = $totalTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getBillingCosts()
    {
        return $this->billingCosts;
    }

    /**
     * @param float $billingCosts
     * @return Purchase
     */
    public function setBillingCosts($billingCosts)
    {
        $this->billingCosts = $billingCosts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     * @return Purchase
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param mixed $supplier
     * @return Purchase
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeadUser()
    {
        return $this->leadUser;
    }

    /**
     * @param mixed $leadUser
     * @return Purchase
     */
    public function setLeadUser($leadUser)
    {
        $this->leadUser = $leadUser;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinTva()
    {
        return $this->minTva;
    }

    /**
     * @param int $minTva
     * @return Purchase
     */
    public function setMinTva($minTva)
    {
        $this->minTva = $minTva;
        return $this;
    }
}
