<?php

namespace Mgd\Entity;

class Purchase
{

     /**
      * @var Document
      */
     private $order;

     /**
      * @var Supplier
      */
     private $supplier;

     /**
      * @var PurchaseSupplierProduct[]
     */
     private $purchaseSupplierProducts;

     /**
      * @var integer
      */
    private $idsupplier;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $invoicenumber;

    /**
     * @var \DateTime
     */
    private $orderdate;

    /**
     * @var string
     */
    private $deliveryreference;

    /**
     * @var \DateTime
     */
    private $deliverydate;

    /**
     * @var \DateTime
     */
    private $actualdeliverydate;

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
    private $idpurchase;

    /**
     * @var string
     */
    private $orderreference;

    /**
     * @var Teammate[]
     */
     private $teammates;

    /**
     * @return Document
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @return PurchaseSupplierProduct[]
     */
    public function getPurchaseSupplierProducts()
    {
        return $this->purchaseSupplierProducts;
    }

    /**
     * @return int
     */
    public function getIdsupplier()
    {
        return $this->idsupplier;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return string
     */
    public function getInvoicenumber()
    {
        return $this->invoicenumber;
    }

    /**
     * @return \DateTime
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * @return string
     */
    public function getDeliveryreference()
    {
        return $this->deliveryreference;
    }

    /**
     * @return \DateTime
     */
    public function getDeliverydate()
    {
        return $this->deliverydate;
    }

    /**
     * @return \DateTime
     */
    public function getActualdeliverydate()
    {
        return $this->actualdeliverydate;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @return int
     */
    public function getIdpurchase()
    {
        return $this->idpurchase;
    }

    /**
     * @return string
     */
    public function getOrderreference()
    {
        return $this->orderreference;
    }

    /**
     * @return Teammate[]
     */
    public function getTeammates()
    {
        return $this->teammates;
    }

    /**
     * @param Document $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @param Supplier $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @param PurchaseSupplierProduct[] $purchaseSupplierProducts
     */
    public function setPurchaseSupplierProducts($purchaseSupplierProducts)
    {
        $this->purchaseSupplierProducts = $purchaseSupplierProducts;
    }

    /**
     * @param int $idsupplier
     */
    public function setIdsupplier($idsupplier)
    {
        $this->idsupplier = $idsupplier;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @param string $invoicenumber
     */
    public function setInvoicenumber($invoicenumber)
    {
        $this->invoicenumber = $invoicenumber;
    }

    /**
     * @param \DateTime $orderdate
     */
    public function setOrderdate($orderdate)
    {
        $this->orderdate = $orderdate;
    }

    /**
     * @param string $deliveryreference
     */
    public function setDeliveryreference($deliveryreference)
    {
        $this->deliveryreference = $deliveryreference;
    }

    /**
     * @param \DateTime $deliverydate
     */
    public function setDeliverydate($deliverydate)
    {
        $this->deliverydate = $deliverydate;
    }

    /**
     * @param \DateTime $actualdeliverydate
     */
    public function setActualdeliverydate($actualdeliverydate)
    {
        $this->actualdeliverydate = $actualdeliverydate;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param string $step
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

    /**
     * @param int $idpurchase
     */
    public function setIdpurchase($idpurchase)
    {
        $this->idpurchase = $idpurchase;
    }

    /**
     * @param string $orderreference
     */
    public function setOrderreference($orderreference)
    {
        $this->orderreference = $orderreference;
    }

    /**
     * @param Teammate[] $teammates
     */
    public function setTeammates($teammates)
    {
        $this->teammates = $teammates;
    }
}
