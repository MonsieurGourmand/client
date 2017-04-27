<?php

namespace Mgd\Entity;

use Mgd\Route\Supplier\User;

class Firm extends Master
{
    /**
     * @var User
     */
    public $users;


    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $reference;

    /**
    * @var string
    */
    private $customerReference;

    /**
     * @var integer
     */
    private $idFirm;

    /**
     * @var Product[]
     */
    private $products;

    public function __construct()
    {
        $this->users = new User($this);
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        if($this->products == null)
            self::setProducts($this->master->getAll('/firms/'.$this->idFirm.'/products',User::class));
        return $this->products;
    }

    /**
     * @param Product[] $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }


    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param string $customerReference
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
    }

    /**
     * @return int
     */
    public function getIdFirm()
    {
        return $this->idFirm;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
