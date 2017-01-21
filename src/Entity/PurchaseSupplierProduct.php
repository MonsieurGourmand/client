<?php

namespace Mgd\Entity;

class PurchaseSupplierProduct
{
    /**
     * @var Purchase
     */
    private $purchase;

    /**
     * @var integer
     */
    private $idpurchase;

    /**
     * @var SupplierProduct
     */
    private $supplierproduct;

    /**
     * @var integer
     */
    private $idsupplierproduct;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $idpurchasesupplierproduct;

    /**
     * @return Purchase
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * @return int
     */
    public function getIdpurchase()
    {
        return $this->idpurchase;
    }

    /**
     * @return SupplierProduct
     */
    public function getSupplierproduct()
    {
        return $this->supplierproduct;
    }

    /**
     * @return int
     */
    public function getIdsupplierproduct()
    {
        return $this->idsupplierproduct;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getIdpurchasesupplierproduct()
    {
        return $this->idpurchasesupplierproduct;
    }
}
