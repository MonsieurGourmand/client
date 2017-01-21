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
        $params = array();

        return $this->master->get($this->url,$id,$this->entity,$params);
    }

    public function post(\Mgd\Entity\Category $category)
    {
        $params = array();

        return $this->master->post($this->url,$category,$this->entity,$params);
    }

    public function put(\Mgd\Entity\Category $category)
    {
        $params = array();

        return $this->master->put($this->url,$category,$this->entity,$params);
    }

    public function delete(\Mgd\Entity\Category $category)
    {
        $params = array();

        return $this->master->delete($this->url,$category,$this->entity,$params);
    }
}