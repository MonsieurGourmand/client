<?php

namespace Mgd\Entity;

use Mgd\Mgd;

class Firm
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Mgd
     */
    protected $master;

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
    private $contacts;

    /**
     * @var Firm[]
     */
    private $suppliers;

    /**
     * @return Firm[]
     */
    public function getCustomers()
    {
        if($this->customers == null)
        {
            self::setCustomers($this->master->getAll('/customers',Firm::class));
        }
        return $this->customers;
    }

    /**
     * @param Firm[] $customers
     */
    public function setCustomers($customers)
    {
        $this->customers = $customers;
    }

    /**
     * @var Firm[]
     */
    private $customers;

    /**
     * @return mixed
     */
    public function getSuppliers()
    {
        if($this->suppliers == null)
        {
            self::setSuppliers($this->master->getAll('/suppliers',Firm::class));
        }
        return $this->suppliers;
    }

    /**
     * @param mixed $suppliers
     */
    public function setSuppliers($suppliers)
    {
        $this->suppliers = $suppliers;
    }

    /**
     * @return User[]
     */
    public function getContacts()
    {
        if($this->contacts == null)
        {
           self::setContacts($this->master->getAll('/users',User::class));
        }
        return $this->contacts;
    }

    /**
     * @param User[] $contacts
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
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
     * @param int $idFirm
     */
    public function setIdFirm($idFirm)
    {
        $this->idFirm = $idFirm;
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
