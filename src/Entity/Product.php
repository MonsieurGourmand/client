<?php

namespace Mgd\Entity;

class Product
{
    /**
     * @var Subcategory
     */
    private $subcategory;

    /**
     * @var integer
     */
    private $idsubcategory;


    /**
     * @var string
     */
     private $reference;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $stockminimum;

    /**
     * @var integer
     */
    private $idproduct;

    /**
    * @var Product
    */
    private $parent;
    
    /**
     * @var Product[]
     */
    private $children;

    /**
     * @return Subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * @return int
     */
    public function getIdsubcategory()
    {
        return $this->idsubcategory;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStockminimum()
    {
        return $this->stockminimum;
    }

    /**
     * @return int
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * @return Product
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return Product[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param Subcategory $subcategory
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;
    }

    /**
     * @param int $idsubcategory
     */
    public function setIdsubcategory($idsubcategory)
    {
        $this->idsubcategory = $idsubcategory;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $stockminimum
     */
    public function setStockminimum($stockminimum)
    {
        $this->stockminimum = $stockminimum;
    }

    /**
     * @param int $idproduct
     */
    public function setIdproduct($idproduct)
    {
        $this->idproduct = $idproduct;
    }

    /**
     * @param Product $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @param Product[] $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
    }
}
