<?php

namespace Mgd\Entity;


class Supplier
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
    private $idsupplier;

    /**
     * @var SupplierContact[]
     */
    private $supplierContacts;

    /**
     * @var SupplierProduct[]
     */
    private $supplierProducts;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getIdsupplier()
    {
        return $this->idsupplier;
    }

    /**
     * @return SupplierContact[]
     */
    public function getSupplierContacts()
    {
        return $this->supplierContacts;
    }

    /**
     * @return SupplierProduct[]
     */
    public function getSupplierProducts()
    {
        return $this->supplierProducts;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param int $idsupplier
     */
    public function setIdsupplier($idsupplier)
    {
        $this->idsupplier = $idsupplier;
    }

    /**
     * @param SupplierContact[] $supplierContacts
     */
    public function setSupplierContacts($supplierContacts)
    {
        $this->supplierContacts = $supplierContacts;
    }

    /**
     * @param SupplierProduct[] $supplierProducts
     */
    public function setSupplierProducts($supplierProducts)
    {
        $this->supplierProducts = $supplierProducts;
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
}
?>