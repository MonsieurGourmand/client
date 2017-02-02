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
    protected $url = "products";

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
        return $this->master->get($this->url,$id,$this->entity);
    }

    public function post(\Mgd\Entity\Product $product)
    {
        return $this->master->post($this->url,$product,$this->entity);
    }

    public function put(\Mgd\Entity\Product $product)
    {
        return $this->master->put($this->url,$product->getIdproduct(),$product,$this->entity);
    }

    public function remove(\Mgd\Entity\Product $product)
    {
        return $this->master->remove($this->url,$product->getIdproduct());
    }
}