<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace Mgd\Route;


class Category
{
    /** @var string */
    protected $url = "categories";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Category::class;
    }

    public function getAll()
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params);
    }

    public function get($id)
    {
        return $this->master->get($this->url,$id,$this->entity);
    }

    public function post(\Mgd\Entity\Category $category)
    {
        return $this->master->post($this->url,$category,$this->entity);
    }

    public function put(\Mgd\Entity\Category $category)
    {
        return $this->master->put($this->url,$category->getIdcategory(),$category,$this->entity);
    }

    public function remove(\Mgd\Entity\Category $category)
    {
        return $this->master->remove($this->url,$category->getIdcategory());
    }
}