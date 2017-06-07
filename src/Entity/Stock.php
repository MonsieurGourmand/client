<?php

namespace Mgd\Entity;

class Stock extends Master
{
     /**
      * @var Product
      */
     private $product;

    /**
     * @var \DateTime
     */
    private $expirationDate;

    /**
     * @var integer
     */
    private $idStock;

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTime $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return int
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * @param int $idStock
     */
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;
    }


}
