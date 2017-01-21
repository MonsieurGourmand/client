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
}
