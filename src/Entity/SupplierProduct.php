<?php

namespace Mgd\Entity;

class SupplierProduct
{

    /**
     * @var integer
     */
    private $idsupplierproduct;


    /**
     * @var Product
     */
    private $product;

    /**
     * @var integer
     */
    private $idproduct;

    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * @var integer
     */
    private $idsupplier;

    /**
     * @var string
     */
    private $companyreference;

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
    private $batches;

    /**
     * @var integer
     */
    private $pieces;

    /**
     * @var integer
     */
    private $productweight;

    /**
     * @var integer
     */
    private $batchweight;

    /**
     * @var integer
     */
    private $pieceweight;

    /**
     * @var integer
     */
    private $kgcost;

    /**
     * @var integer
     */
    private $productcost;

    /**
     * @var integer
     */
    private $piececost;

    /**
     * @var integer
     */
    private $batchcost;

    /**
     * @var integer
     */
    private $kgnegociate;

    /**
     * @var integer
     */
    private $productnegociate;

    /**
     * @var integer
     */
    private $piecenegociate;

    /**
     * @var integer
     */
    private $batchnegociate;

    /**
     * @var integer
     */
    private $vat;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var integer
     */
    private $negociate;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @return int
     */
    public function getIdsupplierproduct()
    {
        return $this->idsupplierproduct;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * @return Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @return int
     */
    public function getIdsupplier()
    {
        return $this->idsupplier;
    }

    /**
     * @return string
     */
    public function getCompanyreference()
    {
        return $this->companyreference;
    }

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @return int
     */
    public function getBatches()
    {
        return $this->batches;
    }

    /**
     * @return int
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * @return int
     */
    public function getProductweight()
    {
        return $this->productweight;
    }

    /**
     * @return int
     */
    public function getBatchweight()
    {
        return $this->batchweight;
    }

    /**
     * @return int
     */
    public function getPieceweight()
    {
        return $this->pieceweight;
    }

    /**
     * @return int
     */
    public function getKgcost()
    {
        return $this->kgcost;
    }

    /**
     * @return int
     */
    public function getProductcost()
    {
        return $this->productcost;
    }

    /**
     * @return int
     */
    public function getPiececost()
    {
        return $this->piececost;
    }

    /**
     * @return int
     */
    public function getBatchcost()
    {
        return $this->batchcost;
    }

    /**
     * @return int
     */
    public function getKgnegociate()
    {
        return $this->kgnegociate;
    }

    /**
     * @return int
     */
    public function getProductnegociate()
    {
        return $this->productnegociate;
    }

    /**
     * @return int
     */
    public function getPiecenegociate()
    {
        return $this->piecenegociate;
    }

    /**
     * @return int
     */
    public function getBatchnegociate()
    {
        return $this->batchnegociate;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getNegociate()
    {
        return $this->negociate;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param int $idsupplierproduct
     */
    public function setIdsupplierproduct($idsupplierproduct)
    {
        $this->idsupplierproduct = $idsupplierproduct;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @param int $idproduct
     */
    public function setIdproduct($idproduct)
    {
        $this->idproduct = $idproduct;
    }

    /**
     * @param Supplier $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @param int $idsupplier
     */
    public function setIdsupplier($idsupplier)
    {
        $this->idsupplier = $idsupplier;
    }

    /**
     * @param string $companyreference
     */
    public function setCompanyreference($companyreference)
    {
        $this->companyreference = $companyreference;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @param int $batches
     */
    public function setBatches($batches)
    {
        $this->batches = $batches;
    }

    /**
     * @param int $pieces
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
    }

    /**
     * @param int $productweight
     */
    public function setProductweight($productweight)
    {
        $this->productweight = $productweight;
    }

    /**
     * @param int $batchweight
     */
    public function setBatchweight($batchweight)
    {
        $this->batchweight = $batchweight;
    }

    /**
     * @param int $pieceweight
     */
    public function setPieceweight($pieceweight)
    {
        $this->pieceweight = $pieceweight;
    }

    /**
     * @param int $kgcost
     */
    public function setKgcost($kgcost)
    {
        $this->kgcost = $kgcost;
    }

    /**
     * @param int $productcost
     */
    public function setProductcost($productcost)
    {
        $this->productcost = $productcost;
    }

    /**
     * @param int $piececost
     */
    public function setPiececost($piececost)
    {
        $this->piececost = $piececost;
    }

    /**
     * @param int $batchcost
     */
    public function setBatchcost($batchcost)
    {
        $this->batchcost = $batchcost;
    }

    /**
     * @param int $kgnegociate
     */
    public function setKgnegociate($kgnegociate)
    {
        $this->kgnegociate = $kgnegociate;
    }

    /**
     * @param int $productnegociate
     */
    public function setProductnegociate($productnegociate)
    {
        $this->productnegociate = $productnegociate;
    }

    /**
     * @param int $piecenegociate
     */
    public function setPiecenegociate($piecenegociate)
    {
        $this->piecenegociate = $piecenegociate;
    }

    /**
     * @param int $batchnegociate
     */
    public function setBatchnegociate($batchnegociate)
    {
        $this->batchnegociate = $batchnegociate;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param int $negociate
     */
    public function setNegociate($negociate)
    {
        $this->negociate = $negociate;
    }

    /**
     * @param int $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }
}
