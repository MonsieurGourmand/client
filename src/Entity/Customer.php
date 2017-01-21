<?php

namespace Mgd\Entity;

class Customer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $discount;


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
     * @var integer
     */
    private $idcustomer;

    /**
     * @var integer
     */
    private $iduser;

     /**
     * @var CustomerProduct[]
     */
     private $customerProducts;

     /**
      * @var CustomerEntity[]
     */
     private $customerEntities;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
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
     * @return int
     */
    public function getIdcustomer()
    {
        return $this->idcustomer;
    }

    /**
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @return CustomerProduct[]
     */
    public function getCustomerProducts()
    {
        return $this->customerProducts;
    }

    /**
     * @return CustomerEntity[]
     */
    public function getCustomerEntities()
    {
        return $this->customerEntities;
    }

}
