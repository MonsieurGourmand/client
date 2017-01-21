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
}
?>