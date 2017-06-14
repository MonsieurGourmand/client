<?php

namespace Mgd\Entity;

class Product extends Master
{
    /**
     * @var \Mgd\Route\Product\Price
     */
    public $price;

    /**
     * @var \Mgd\Route\Product\Stock
     */
    public $stock;

    /**
     * @var integer
     */
    private $idProduct;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $alert;

    /**
     * @return mixed
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * @param mixed $alert
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;
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
     */
    public function setBaseAlert($baseAlert)
    {
        $this->baseAlert = $baseAlert;
    }

    /**
     * @var integer
     */
    private $baseAlert;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param int $idProduct
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    /**
     * @return Product
     */
    public function getPurchaseProduct()
    {
        return $this->purchaseProduct;
    }

    /**
     * @param Product $purchaseProduct
     */
    public function setPurchaseProduct($purchaseProduct)
    {
        $this->purchaseProduct = $purchaseProduct;
    }

    /**
     * @return Firm
     */
    public function getFirm()
    {
        return $this->firm;
    }

    /**
     * @param Firm $firm
     */
    public function setFirm($firm)
    {
        $this->firm = $firm;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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
     */
    public function setCompanyReference($companyReference)
    {
        $this->companyReference = $companyReference;
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

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
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
     */
    public function setBatches($batches)
    {
        $this->batches = $batches;
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
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
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
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
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
     */
    public function setBaseWeight($baseWeight)
    {
        $this->baseWeight = $baseWeight;
    }

    /**
     * @return int
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * @param int $productWeight
     */
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;
    }

    /**
     * @return int
     */
    public function getNegotiate()
    {
        return $this->negotiate;
    }

    /**
     * @param int $negotiate
     */
    public function setNegotiate($negotiate)
    {
        $this->negotiate = $negotiate;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }
    /**
     * @var Product
     */
    private $purchaseProduct;
    /**
     * @var Firm
     */
    private $firm;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var Product
     */
    private $salesProducts;

    /**
     * @return Product
     */
    public function getSalesProducts()
    {
        return $this->salesProducts;
    }

    /**
     * @param Product $salesProduct
     */
    public function setSalesProducts($salesProducts)
    {
        $this->salesProducts = $salesProducts;
    }

    /**
     * @var string
     *
     */
    private $companyReference;

    /**
     * @var string
     *
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
    private $batches;

    /**
     * @var integer
     */
    private $pieces;

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
    private $productWeight;
    /**
     * @var integer
     */
    private $negotiate;
    /**
     * @var integer
     */
    private $cost;

    /**
     * @var Price
     */
    private $activePrice;

    private $dlcDisable;

    /**
     * @return mixed
     */
    public function getDlcDisable()
    {
        return $this->dlcDisable;
    }

    /**
     * @param mixed $dlcDisable
     */
    public function setDlcDisable($dlcDisable)
    {
        $this->dlcDisable = $dlcDisable;
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
     */
    public function setQuantityPurchase($quantityPurchase)
    {
        $this->quantityPurchase = $quantityPurchase;
    }


    /**
     * @var integer
     *
     */
    private $quantityPurchase;

    /**
     * @return mixed
     */
    public function getActivePrice()
    {
        return $this->activePrice;
    }

    /**
     * @param mixed $activePrice
     */
    public function setActivePrice($activePrice)
    {
        $this->activePrice = $activePrice;
    }

}
