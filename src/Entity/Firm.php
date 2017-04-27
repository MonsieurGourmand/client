<?php

namespace Mgd\Entity;


class Firm extends Master
{
    /**
     * @var \Mgd\Route\Supplier\User
     */
    public $users;

    /**
     * @var \Mgd\Route\Supplier\Product
     */
    public $products;


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
