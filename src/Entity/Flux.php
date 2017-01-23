<?php

namespace Mgd\Entity;

class Flux
{
     /**
      * @var Stock
      */
     private $stock;

     /**
      * @var integer
      */
     private $idstock;

    /**
     * @var integer
     */
    private $incoming;

    /**
     * @var integer
     */
    private $outcoming;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var Package
     */
     private $package;

     /**
      * @var integer
      */
    private $idpackage;

    /**
     * @var Purchase
     */
    private $purchase;

    /**
     * @var integer
     */
    private $idpurchase;

    /**
     * @var Movement
     */
    private $movement;

    /**
     * @var integer
     */
    private $idmovement;

    /**
     * @var integer
     */
    private $idflux;

    /**
     * @return Stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @return int
     */
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * @return int
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     * @return int
     */
    public function getOutcoming()
    {
        return $this->outcoming;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @return int
     */
    public function getIdpackage()
    {
        return $this->idpackage;
    }

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
     * @return Movement
     */
    public function getMovement()
    {
        return $this->movement;
    }

    /**
     * @return int
     */
    public function getIdmovement()
    {
        return $this->idmovement;
    }

    /**
     * @return int
     */
    public function getIdflux()
    {
        return $this->idflux;
    }

    /**
     * @param Stock $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @param int $idstock
     */
    public function setIdstock($idstock)
    {
        $this->idstock = $idstock;
    }

    /**
     * @param int $incoming
     */
    public function setIncoming($incoming)
    {
        $this->incoming = $incoming;
    }

    /**
     * @param int $outcoming
     */
    public function setOutcoming($outcoming)
    {
        $this->outcoming = $outcoming;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @param Package $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @param int $idpackage
     */
    public function setIdpackage($idpackage)
    {
        $this->idpackage = $idpackage;
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
     * @param Movement $movement
     */
    public function setMovement($movement)
    {
        $this->movement = $movement;
    }

    /**
     * @param int $idmovement
     */
    public function setIdmovement($idmovement)
    {
        $this->idmovement = $idmovement;
    }

    /**
     * @param int $idflux
     */
    public function setIdflux($idflux)
    {
        $this->idflux = $idflux;
    }
}
