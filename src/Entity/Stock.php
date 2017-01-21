<?php

namespace Mgd\Entity;

class Stock
{
     /**
      * @var Product
      */
     private $product;

     /**
      * @var integer
      */
     private $idproduct;

    /**
     * @var string
     */
    private $stockreference;

    /**
     * @var \DateTime
     */
    private $expirationdate;

    /**
     * @var integer
     */
    private $idstock;

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
     * @return string
     */
    public function getStockreference()
    {
        return $this->stockreference;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationdate()
    {
        return $this->expirationdate;
    }

    /**
     * @return int
     */
    public function getIdstock()
    {
        return $this->idstock;
    }
}
