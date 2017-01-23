<?php

namespace Mgd\Entity;

class Subcategory
{
     /**
      * @var Category
      */
     private $category;

     /**
      * @var integer
      */
     private $idcategory;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $idsubcategory;

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * @param int $idcategory
     */
    public function setIdcategory($idcategory)
    {
        $this->idcategory = $idcategory;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getIdsubcategory()
    {
        return $this->idsubcategory;
    }

    /**
     * @param int $idsubcategory
     */
    public function setIdsubcategory($idsubcategory)
    {
        $this->idsubcategory = $idsubcategory;
    }
}
