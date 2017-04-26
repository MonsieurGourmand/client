<?php

namespace Mgd\Entity;

class Stock extends Master
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
     * @param string $stockreference
     */
    public function setStockreference($stockreference)
    {
        $this->stockreference = $stockreference;
    }

    /**
     * @param \DateTime $expirationdate
     */
    public function setExpirationdate($expirationdate)
    {
        $this->expirationdate = $expirationdate;
    }

    /**
     * @param int $idstock
     */
    public function setIdstock($idstock)
    {
        $this->idstock = $idstock;
    }
}
