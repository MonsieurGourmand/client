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
}
