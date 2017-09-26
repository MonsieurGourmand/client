<?php

namespace Mgd\Entity;


class Firm extends Master
{
    /**
     * @var \Mgd\Route\Firm\User
     */
    public $users;

    /**
     * @param int $idFirm
     */
    public function setIdFirm($idFirm)
    {
        $this->idFirm = $idFirm;
    }

    /**
     * @var \Mgd\Route\Firm\Product
     */
    public $products;


    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $customerReference;

    /**
     * @var integer
     */
    private $idFirm;

    /**
     * @var float
     */
    private $postagePaid;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var float
     */
    private $billingCosts;
    /**
     * @var float
     */
    private $deliveryCharge;

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
     * @return float
     */
    public function getBillingCosts()
    {
        return $this->billingCosts;
    }

    /**
     * @param float $billingCosts
     */
    public function setBillingCosts($billingCosts)
    {
        $this->billingCosts = $billingCosts;
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
     */
    public function setDeliveryDays($deliveryDays)
    {
        $this->deliveryDays = $deliveryDays;
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
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
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
     */
    public function setPaymentCondition($paymentCondition)
    {
        $this->paymentCondition = $paymentCondition;
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
    public function getPostagePaid()
    {
        return $this->postagePaid;
    }

    /**
     * @param string $postagePaid
     */
    public function setPostagePaid($postagePaid)
    {
        $this->postagePaid = $postagePaid;
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
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
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
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
    }

    /**
     * @return int
     */
    public function getIdFirm()
    {
        return $this->idFirm;
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
