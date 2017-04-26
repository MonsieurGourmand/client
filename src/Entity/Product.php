<?php

namespace Mgd\Entity;

class Product extends Master
{
    /**
     * @var integer
     */
    private $idProduct;


    /**
     * @var Product
     */
    private $saleProduct;


    /**
     * @var boolean
     */
    private $active;


    /**
     * @var Product
     */
    private $parent;

    /**
     * @var Firm
     */
    private $firm;

    /**
     * @var Category
     */
    private $category;

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
    private $productWeight;

    /**
     * @var integer
     */
    private $batchWeight;

    /**
     * @var integer
     */
    private $pieceWeight;

    /**
     * @var integer
     */
    private $kgCost;

    /**
     * @var integer
     */
    private $productCost;

    /**
     * @var integer
     */
    private $pieceCost;

    /**
     * @var integer
     */
    private $batchCost;

    /**
     * @var integer
     */
    private $kgNegotiate;

    /**
     * @var integer
     */
    private $productNegotiate;

    /**
     * @var integer
     */
    private $pieceNegotiate;

    /**
     * @var integer
     */
    private $batchNegotiate;

    /**
     * @var integer
     */
    private $vat;

    private $weight;

    private $negotiate;

    private $cost;

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
    public function getSaleProduct()
    {
        return $this->saleProduct;
    }

    /**
     * @param Product $saleProduct
     */
    public function setSaleProduct($saleProduct)
    {
        $this->saleProduct = $saleProduct;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return Product
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Product $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
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
    public function getBatchWeight()
    {
        return $this->batchWeight;
    }

    /**
     * @param int $batchWeight
     */
    public function setBatchWeight($batchWeight)
    {
        $this->batchWeight = $batchWeight;
    }

    /**
     * @return int
     */
    public function getPieceWeight()
    {
        return $this->pieceWeight;
    }

    /**
     * @param int $pieceWeight
     */
    public function setPieceWeight($pieceWeight)
    {
        $this->pieceWeight = $pieceWeight;
    }

    /**
     * @return int
     */
    public function getKgCost()
    {
        return $this->kgCost;
    }

    /**
     * @param int $kgCost
     */
    public function setKgCost($kgCost)
    {
        $this->kgCost = $kgCost;
    }

    /**
     * @return int
     */
    public function getProductCost()
    {
        return $this->productCost;
    }

    /**
     * @param int $productCost
     */
    public function setProductCost($productCost)
    {
        $this->productCost = $productCost;
    }

    /**
     * @return int
     */
    public function getPieceCost()
    {
        return $this->pieceCost;
    }

    /**
     * @param int $pieceCost
     */
    public function setPieceCost($pieceCost)
    {
        $this->pieceCost = $pieceCost;
    }

    /**
     * @return int
     */
    public function getBatchCost()
    {
        return $this->batchCost;
    }

    /**
     * @param int $batchCost
     */
    public function setBatchCost($batchCost)
    {
        $this->batchCost = $batchCost;
    }

    /**
     * @return int
     */
    public function getKgNegotiate()
    {
        return $this->kgNegotiate;
    }

    /**
     * @param int $kgNegotiate
     */
    public function setKgNegotiate($kgNegotiate)
    {
        $this->kgNegotiate = $kgNegotiate;
    }

    /**
     * @return int
     */
    public function getProductNegotiate()
    {
        return $this->productNegotiate;
    }

    /**
     * @param int $productNegotiate
     */
    public function setProductNegotiate($productNegotiate)
    {
        $this->productNegotiate = $productNegotiate;
    }

    /**
     * @return int
     */
    public function getPieceNegotiate()
    {
        return $this->pieceNegotiate;
    }

    /**
     * @param int $pieceNegotiate
     */
    public function setPieceNegotiate($pieceNegotiate)
    {
        $this->pieceNegotiate = $pieceNegotiate;
    }

    /**
     * @return int
     */
    public function getBatchNegotiate()
    {
        return $this->batchNegotiate;
    }

    /**
     * @param int $batchNegotiate
     */
    public function setBatchNegotiate($batchNegotiate)
    {
        $this->batchNegotiate = $batchNegotiate;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getNegotiate()
    {
        return $this->negotiate;
    }

    /**
     * @param mixed $negotiate
     */
    public function setNegotiate($negotiate)
    {
        $this->negotiate = $negotiate;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }


}
