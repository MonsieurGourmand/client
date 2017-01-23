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

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
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
     * @param int $idcustomer
     */
    public function setIdcustomer($idcustomer)
    {
        $this->idcustomer = $idcustomer;
    }

    /**
     * @param int $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

    /**
     * @param CustomerProduct[] $customerProducts
     */
    public function setCustomerProducts($customerProducts)
    {
        $this->customerProducts = $customerProducts;
    }

    /**
     * @param CustomerEntity[] $customerEntities
     */
    public function setCustomerEntities($customerEntities)
    {
        $this->customerEntities = $customerEntities;
    }

}
