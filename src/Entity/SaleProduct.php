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

    /**
     * @param Sale $sale
     */
    public function setSale($sale)
    {
        $this->sale = $sale;
    }

    /**
     * @param int $idsale
     */
    public function setIdsale($idsale)
    {
        $this->idsale = $idsale;
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
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @param int $idsaleproduct
     */
    public function setIdsaleproduct($idsaleproduct)
    {
        $this->idsaleproduct = $idsaleproduct;
    }
}
