<?php

namespace Mgd\Entity;

class PackageProduct
{
     /**
      * @var Package
      */
     private $package;

     /**
      * @var integer
      */
     private $idpackage;

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
    private $idpackageproduct;

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
    public function getIdpackageproduct()
    {
        return $this->idpackageproduct;
    }
}
