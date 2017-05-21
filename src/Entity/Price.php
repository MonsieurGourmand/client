<?php

namespace Mgd\Entity;

class Price extends Master
{
    /**
     * @var integer
     */
    private $idPrice;

    /**
     * @var boolean
     */
    private $active;
    /**
     * @var integer
     */
    private $cost;

    /**
     * @var integer
     */
    private $baseCost;

    /**
     * @var integer
     */
    private $negotiate;

    /**
     * @var integer
     */
    private $baseNegotiate;
    /**
     * @var integer
     */
    private $vat;

    /**
     * @return int
     */
    public function getIdPrice()
    {
        return $this->idPrice;
    }

    /**
     * @param int $idPrice
     */
    public function setIdPrice($idPrice)
    {
        $this->idPrice = $idPrice;
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
     * @return int
     */
    public function getBaseCost()
    {
        return $this->baseCost;
    }

    /**
     * @param int $baseCost
     */
    public function setBaseCost($baseCost)
    {
        $this->baseCost = $baseCost;
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
    public function getBaseNegotiate()
    {
        return $this->baseNegotiate;
    }

    /**
     * @param int $baseNegotiate
     */
    public function setBaseNegotiate($baseNegotiate)
    {
        $this->baseNegotiate = $baseNegotiate;
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

}
