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
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @param int $idproduct
     */
    public function setIdproduct($idproduct)
    {
        $this->idproduct = $idproduct;
    }

    /**
     * @param int $pricing
     */
    public function setPricing($pricing)
    {
        $this->pricing = $pricing;
    }

    /**
     * @param int $idcustomerproduct
     */
    public function setIdcustomerproduct($idcustomerproduct)
    {
        $this->idcustomerproduct = $idcustomerproduct;
    }
}
