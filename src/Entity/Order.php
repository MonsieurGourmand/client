<?php

namespace Mgd\Entity;

class Order extends Master
{

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
    private $lead_user;

    /**
     * @var User
     */
    private $sales_user;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $invoice_number;

    /**
     * @var \DateTime
     */
    private $order_date;

    /**
     * @var string
     */
    private $delivery_reference;

    /**
     * @var \DateTime
     */
    private $delivery_date;

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
    private $id_order;

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
        return $this->lead_user;
    }

    /**
     * @param User $lead_user
     */
    public function setLeadUser($lead_user)
    {
        $this->lead_user = $lead_user;
    }

    /**
     * @return User
     */
    public function getSalesUser()
    {
        return $this->sales_user;
    }

    /**
     * @param User $sales_user
     */
    public function setSalesUser($sales_user)
    {
        $this->sales_user = $sales_user;
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
        return $this->invoice_number;
    }

    /**
     * @param string $invoice_number
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->invoice_number = $invoice_number;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @param \DateTime $order_date
     */
    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;
    }

    /**
     * @return string
     */
    public function getDeliveryReference()
    {
        return $this->delivery_reference;
    }

    /**
     * @param string $delivery_reference
     */
    public function setDeliveryReference($delivery_reference)
    {
        $this->delivery_reference = $delivery_reference;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * @param \DateTime $delivery_date
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->delivery_date = $delivery_date;
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
        return $this->id_order;
    }

    /**
     * @param int $idOrder
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;
    }
}
