<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:04 PM
 */

namespace Mgd\Route;


class Product
{
    /** @var string */
    protected $url = "reference";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Product::class;
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

    public function post(\Mgd\Entity\Product $product)
    {
        $params = array();

        return $this->master->post($this->url,$product,$this->entity,$params);
    }

    public function put(\Mgd\Entity\Product $product)
    {
        $params = array();

        return $this->master->put($this->url,$product,$this->entity,$params);
    }

    public function delete(\Mgd\Entity\Product $product)
    {
        $params = array();

        return $this->master->delete($this->url,$product,$this->entity,$params);
    }
}