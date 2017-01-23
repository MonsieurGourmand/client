<?php

namespace Mgd\Entity;

class ProductFood extends Product
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
     * @var integer
     */
    private $idproductfood;

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
    public function getIdproductfood()
    {
        return $this->idproductfood;
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
     * @param int $idproductfood
     */
    public function setIdproductfood($idproductfood)
    {
        $this->idproductfood = $idproductfood;
    }
}
