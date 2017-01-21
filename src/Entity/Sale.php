<?php

namespace Mgd\Entity;

class Sale
{
     /**
      * @var Customer
      */
     private $customer;

     /**
      * @var integer
      */
     private $idcustomer;

     /**
      * @var Teammate
      */
     private $commercial;

     /**
      * @var integer
      */
     private $idcommercialteammate;

     /**
      * @var Teammate
      */
     private $projet;

     /**
      * @var integer
      */
     private $idprojetteammate;

    /**
     * @var string
     */
    private $place;

    /**
     * @var \DateTime
     */
    private $orderdate;

    /**
     * @var \DateTime
     */
    private $customerorderdate;

    /**
     * @var \DateTime
     */
    private $preparationdate;

    /**
     * @var \DateTime
     */
    private $deliverydate;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var SaleProduct[]
    */
    private $products;

    /**
     * @var integer
     */
    private $idsale;

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return int
     */
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }

    /**
     * @return Teammate
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * @return int
     */
    public function getIdcommercialteammate()
    {
        return $this->idcommercialteammate;
    }

    /**
     * @return Teammate
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * @return int
     */
    public function getIdprojetteammate()
    {
        return $this->idprojetteammate;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return \DateTime
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * @return \DateTime
     */
    public function getCustomerorderdate()
    {
        return $this->customerorderdate;
    }

    /**
     * @return \DateTime
     */
    public function getPreparationdate()
    {
        return $this->preparationdate;
    }

    /**
     * @return \DateTime
     */
    public function getDeliverydate()
    {
        return $this->deliverydate;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return SaleProduct[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return int
     */
    public function getIdsale()
    {
        return $this->idsale;
    }
}
