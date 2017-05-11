<?php

namespace Mgd\Entity;

class Category extends Master
{
    /**
     * @var Category
     */
    private $subCategories;

    /**
     * @var integer $idCategory
     */
    private $idCategory;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Category $parent
     */
    private $parentCategory;

    /**
     * @return mixed
     */
    public function getParentCategory()
    {
        return $this->parentCategory;
    }

    /**
     * @param mixed $parentCategory
     */
    public function setParentCategory($parentCategory)
    {
        $this->parentCategory = $parentCategory;
    }

    /**
     * @return int
     */
    public function getIdCategory()
    {
        return $this->idCategory;
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
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Category
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * @param Category $subCategories
     */
    public function setSubCategories($subCategories)
    {
        $this->subCategories = $subCategories;
    }
}