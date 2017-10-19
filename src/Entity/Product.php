<?php

namespace Mgd\Entity;

class Product extends Master
{
    /**
     * @var integer
     */
    private $idProduct;


    /**
     * @var integer
     */
    private $batches;

    /**
     * @var integer
     */
    private $pieces;

    /**
     * @var string
     */
    private $companyReference;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var integer
     */
    private $baseWeight;

    /**
     * @var integer
     */
    private $quantityPurchase;

    /**
     * @var PurchaseProduct
     */
    private $purchaseProduct;

    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var boolean
     */
    private $dlcDisable;

    /**
     * @var boolean
     */
    private $archived;

    /**
     * @var boolean
     */
    private $stopped;

    /**
     * @var integer
     */
    private $alert;


    /**
     * @var float
     */
    private $tax;

    /**
     * @var integer
     */
    private $baseAlert;

    /**
     * @var float
     */
    private $productWeight;

    /**
     * @var float
     */
    private $negotiate;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var boolean
     */
    private $inAlert;

    /**
     * @var integer
     */
    private $quantityExpired;

    /**
     * @var float
     */
    private $stockPrice;

    /**
     * @var Price
     */
    private $activePrice;

    /**
     * @var Product
     */
    private $salesProducts;

    /**
     * @return int
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @return int
     */
    public function getBatches()
    {
        return $this->batches;
    }

    /**
     * @param int $batches
     * @return Product
     */
    public function setBatches($batches)
    {
        $this->batches = $batches;
        return $this;
    }

    /**
     * @return int
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     * @return Product
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyReference()
    {
        return $this->companyReference;
    }

    /**
     * @param string $companyReference
     * @return Product
     */
    public function setCompanyReference($companyReference)
    {
        $this->companyReference = $companyReference;
        return $this;
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
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     * @return Product
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     * @return Product
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseWeight()
    {
        return $this->baseWeight;
    }

    /**
     * @param int $baseWeight
     * @return Product
     */
    public function setBaseWeight($baseWeight)
    {
        $this->baseWeight = $baseWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPurchase()
    {
        return $this->quantityPurchase;
    }

    /**
     * @param int $quantityPurchase
     * @return Product
     */
    public function setQuantityPurchase($quantityPurchase)
    {
        $this->quantityPurchase = $quantityPurchase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseProduct()
    {
        return $this->purchaseProduct;
    }

    /**
     * @param mixed $purchaseProduct
     * @return Product
     */
    public function setPurchaseProduct($purchaseProduct)
    {
        $this->purchaseProduct = $purchaseProduct;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param mixed $supplier
     * @return Product
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDlcDisable()
    {
        return $this->dlcDisable;
    }

    /**
     * @param mixed $dlcDisable
     * @return Product
     */
    public function setDlcDisable($dlcDisable)
    {
        $this->dlcDisable = $dlcDisable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param mixed $archived
     * @return Product
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStopped()
    {
        return $this->stopped;
    }

    /**
     * @param mixed $stopped
     * @return Product
     */
    public function setStopped($stopped)
    {
        $this->stopped = $stopped;
        return $this;
    }

    /**
     * @return int
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * @param int $alert
     * @return Product
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;
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
     * @return Product
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseAlert()
    {
        return $this->baseAlert;
    }

    /**
     * @param int $baseAlert
     * @return Product
     */
    public function setBaseAlert($baseAlert)
    {
        $this->baseAlert = $baseAlert;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * @param float $productWeight
     * @return Product
     */
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getNegotiate()
    {
        return $this->negotiate;
    }

    /**
     * @param float $negotiate
     * @return Product
     */
    public function setNegotiate($negotiate)
    {
        $this->negotiate = $negotiate;
        return $this;
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
     * @return Product
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
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
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInAlert()
    {
        return $this->inAlert;
    }

    /**
     * @param bool $inAlert
     * @return Product
     */
    public function setInAlert($inAlert)
    {
        $this->inAlert = $inAlert;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityExpired()
    {
        return $this->quantityExpired;
    }

    /**
     * @param int $quantityExpired
     * @return Product
     */
    public function setQuantityExpired($quantityExpired)
    {
        $this->quantityExpired = $quantityExpired;
        return $this;
    }

    /**
     * @return float
     */
    public function getStockPrice()
    {
        return $this->stockPrice;
    }

    /**
     * @param float $stockPrice
     * @return Product
     */
    public function setStockPrice($stockPrice)
    {
        $this->stockPrice = $stockPrice;
        return $this;
    }

    /**
     * @return Price
     */
    public function getActivePrice()
    {
        return $this->activePrice;
    }

    /**
     * @param Price $activePrice
     * @return Product
     */
    public function setActivePrice($activePrice)
    {
        $this->activePrice = $activePrice;
        return $this;
    }

    /**
     * @return Product
     */
    public function getSalesProducts()
    {
        return $this->salesProducts;
    }


    public function setSalesProducts($salesProducts)
    {
        $this->salesProducts = $salesProducts;
    }


}
