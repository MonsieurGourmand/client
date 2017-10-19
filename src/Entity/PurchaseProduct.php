<?php

namespace Mgd\Entity;

class PurchaseProduct extends Master
{
    /**
     * @var integer
     */
    private $idPurchaseProduct;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var float
     */
    private $tax;

    /**
     * @var float
     */
    private $vat;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $free;

    /**
     * @var integer
     */
    private $discount;

    /**
     * @var Purchase
     */
    private $purchase;

    /**
     * @var Product
     */
    private $product;

    /**
     * @return int
     */
    public function getIdPurchaseProduct()
    {
        return $this->idPurchaseProduct;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return PurchaseProduct
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     * @return PurchaseProduct
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param float $vat
     * @return PurchaseProduct
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return PurchaseProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * @param int $free
     * @return PurchaseProduct
     */
    public function setFree($free)
    {
        $this->free = $free;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     * @return PurchaseProduct
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return Purchase
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * @param Purchase $purchase
     * @return PurchaseProduct
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;
        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return PurchaseProduct
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }


}
