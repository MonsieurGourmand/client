<?php

namespace Mgd\Entity;

class Category
{
    /**
     * @var string
     */
    private $name;


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
     * @return int
     */
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param Subcategory[] $subcategories
     */
    public function setSubcategories($subcategories)
    {
        $this->subcategories = $subcategories;
    }

    /**
     * @param int $idcategory
     */
    public function setIdcategory($idcategory)
    {
        $this->idcategory = $idcategory;
    }

}
