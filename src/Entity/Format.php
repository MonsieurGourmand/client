<?php

namespace Mgd\Entity;

class Format extends Master
{
    /**
     * @var integer
     */
    private $idFormat;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var \Mgd\Route\Format\FormatProduct
     */
    public $formatProducts;

    /**
     * @return int
     */
    public function getIdFormat()
    {
        return $this->idFormat;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

}
