<?php

namespace Mgd\Entity;


class Supplier extends Master
{

    /**
     * @var integer
     */
    private $idSupplier;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $comment;


    /**
     * @var float
     */
    private $postagePaid;

    /**
     * @var float
     */
    private $deliveryCharge;

    /**
     * @var float
     */
    private $billingCosts;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $deliveryDays;

    /**
     * @var string
     */
    private $deliveryTime;

    /**
     * @var string
     */
    private $paymentCondition;

    /**
     * @var string
     */
    private $customerReference;

    /**
     * @var \Mgd\Route\Supplier\User
     */
    public $users;

    /**
     * @var \Mgd\Route\Supplier\Product
     */
    public $products;


    /**
     * @return int
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
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
     * @return Supplier
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return Supplier
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostagePaid()
    {
        return $this->postagePaid;
    }

    /**
     * @param float $postagePaid
     * @return Supplier
     */
    public function setPostagePaid($postagePaid)
    {
        $this->postagePaid = $postagePaid;
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
     * @return Supplier
     */
    public function setDeliveryCharge($deliveryCharge)
    {
        $this->deliveryCharge = $deliveryCharge;
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
     * @return Supplier
     */
    public function setBillingCosts($billingCosts)
    {
        $this->billingCosts = $billingCosts;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return Supplier
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDays()
    {
        return $this->deliveryDays;
    }

    /**
     * @param string $deliveryDays
     * @return Supplier
     */
    public function setDeliveryDays($deliveryDays)
    {
        $this->deliveryDays = $deliveryDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param string $deliveryTime
     * @return Supplier
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCondition()
    {
        return $this->paymentCondition;
    }

    /**
     * @param string $paymentCondition
     * @return Supplier
     */
    public function setPaymentCondition($paymentCondition)
    {
        $this->paymentCondition = $paymentCondition;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param string $customerReference
     * @return Supplier
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }


}
