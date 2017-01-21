<?php

namespace Mgd\Entity;

class CustomerProduct
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
     * @var Product
     */
    private $product;

    /**
     * @var integer
     */
    private $idproduct;

    /**
     * @var integer
     */
    private $pricing;

    /**
     * @var integer
     */
    private $idcustomerproduct;

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
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * @return int
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * @return int
     */
    public function getIdcustomerproduct()
    {
        return $this->idcustomerproduct;
    }
}
