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

    /**
     * @param Purchase $purchase
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * @param int $idpurchase
     */
    public function setIdpurchase($idpurchase)
    {
        $this->idpurchase = $idpurchase;
    }

    /**
     * @param SupplierProduct $supplierproduct
     */
    public function setSupplierproduct($supplierproduct)
    {
        $this->supplierproduct = $supplierproduct;
    }

    /**
     * @param int $idsupplierproduct
     */
    public function setIdsupplierproduct($idsupplierproduct)
    {
        $this->idsupplierproduct = $idsupplierproduct;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @param int $idpurchasesupplierproduct
     */
    public function setIdpurchasesupplierproduct($idpurchasesupplierproduct)
    {
        $this->idpurchasesupplierproduct = $idpurchasesupplierproduct;
    }
}
