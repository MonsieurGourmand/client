<?php

namespace Mgd\Entity;

class Category
{
    /**
     * @var string
     */
    private $name;

    /**
    * @var Subcategory[]
    */
    private $subcategories;


    /**
     * @var integer
     */
    private $idcategory;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Subcategory[]
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * @return int
     */
    public function getIdcategory()
    {
        return $this->idcategory;
    }

}
