<?php

namespace Mgd\Entity;

class StockZone
{
     /**
      * @var Zone
      */
     private $zone;

     /**
      * @var integer
      */
     private $idzone;

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
    private $idstockzone;

    /**
     * @return Zone
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * @return int
     */
    public function getIdzone()
    {
        return $this->idzone;
    }

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
    public function getIdstockzone()
    {
        return $this->idstockzone;
    }

    /**
     * @param Zone $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @param int $idzone
     */
    public function setIdzone($idzone)
    {
        $this->idzone = $idzone;
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
     * @param int $idstockzone
     */
    public function setIdstockzone($idstockzone)
    {
        $this->idstockzone = $idstockzone;
    }
}
