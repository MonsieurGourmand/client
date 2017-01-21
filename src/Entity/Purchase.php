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
      * @var SupplierProduct[]
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
     * @return SupplierProduct[]
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
}
