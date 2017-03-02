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
    private $saleproducts;

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
    public function getSaleproducts()
    {
        return $this->saleproducts;
    }

    /**
     * @return int
     */
    public function getIdsale()
    {
        return $this->idsale;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @param int $idcustomer
     */
    public function setIdcustomer($idcustomer)
    {
        $this->idcustomer = $idcustomer;
    }

    /**
     * @param Teammate $commercial
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;
    }

    /**
     * @param int $idcommercialteammate
     */
    public function setIdcommercialteammate($idcommercialteammate)
    {
        $this->idcommercialteammate = $idcommercialteammate;
    }

    /**
     * @param Teammate $projet
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;
    }

    /**
     * @param int $idprojetteammate
     */
    public function setIdprojetteammate($idprojetteammate)
    {
        $this->idprojetteammate = $idprojetteammate;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @param \DateTime $orderdate
     */
    public function setOrderdate($orderdate)
    {
        $this->orderdate = $orderdate;
    }

    /**
     * @param \DateTime $customerorderdate
     */
    public function setCustomerorderdate($customerorderdate)
    {
        $this->customerorderdate = $customerorderdate;
    }

    /**
     * @param \DateTime $preparationdate
     */
    public function setPreparationdate($preparationdate)
    {
        $this->preparationdate = $preparationdate;
    }

    /**
     * @param \DateTime $deliverydate
     */
    public function setDeliverydate($deliverydate)
    {
        $this->deliverydate = $deliverydate;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param SaleProduct[] $saleproducts
     */
    public function setSaleproducts($saleproducts)
    {
        $this->saleproducts = $saleproducts;
    }

    /**
     * @param int $idsale
     */
    public function setIdsale($idsale)
    {
        $this->idsale = $idsale;
    }
}
