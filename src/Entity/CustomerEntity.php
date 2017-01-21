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
}
