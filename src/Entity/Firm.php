<?php

namespace Mgd\Entity;

class Firm extends Master
{
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
     * @var User[]
     */
    private $users;

    /**
     * @var Product[]
     */
    private $products;

    /**
     * @return User[]
     */
    public function getUsers()
    {
        if($this->users == null)
            self::setUsers($this->master->getAll('/firms/'.$this->idFirm.'/users',User::class));
        return $this->users;
    }

    /**
     * @param User[] $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
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
