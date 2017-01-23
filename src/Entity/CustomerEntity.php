<?php

namespace Mgd\Entity;

class CustomerEntity
{
    /**
     * @var integer
     */
    private $idcustomerentity;

    /**
     * @var string
     */
    private $name;

     /**
      * @var Customer
      */
     private $customer;

    /**
     * @var integer
     */
    private $idcustomer;

    /**
     * @return int
     */
    public function getIdcustomerentity()
    {
        return $this->idcustomerentity;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

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
     * @param int $idcustomerentity
     */
    public function setIdcustomerentity($idcustomerentity)
    {
        $this->idcustomerentity = $idcustomerentity;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
}
