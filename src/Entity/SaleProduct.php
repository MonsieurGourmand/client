<?php

namespace Mgd\Entity;

class SaleProduct
{
     /**
      * @var Sale
      */
     private $sale;

     /**
      * @var integer
      */
     private $idsale;

     /**
      * @var Product
      */
     private $product;

     /**
      * @var integer
      */
     private $idproduct;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $idsaleproduct;

    /**
     * @return Sale
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * @return int
     */
    public function getIdsale()
    {
        return $this->idsale;
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
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getIdsaleproduct()
    {
        return $this->idsaleproduct;
    }
}
