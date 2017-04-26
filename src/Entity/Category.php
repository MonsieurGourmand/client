<?php

namespace Mgd\Entity;

class Category extends Master
{
    /**
     * @var integer $idcategory
     */
    private $idcategory;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Category $parent
     */
    private $parent;

    /**
     * @return int
     */
    public function getIdcategory()
    {
        return $this->idcategory;
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
    public function getParent()
    {
        if($this->parent == null)
            self::setParent($this->master->get("/categories",self::getIdcategory(),Category::class));
        return $this->parent;
    }

    /**
     * @param Category $parent
     * @return Category
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }
}