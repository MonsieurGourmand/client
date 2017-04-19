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
    protected $base_url = "firms/";


    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Product::class;
    }

    public function getAll($idFirm)
    {
        $params = array();
        return $this->master->getAll($this->base_url.$idFirm.$this->url, $this->entity,$params);
    }

    public function get($idFirm,$id)
    {
        return $this->master->get($this->base_url.$idFirm.$this->url,$id,$this->entity);
    }

    public function post($idFirm,\Mgd\Entity\Product $product)
    {
        return $this->master->post($this->base_url.$idFirm.$this->url,$product,$this->entity);
    }

    public function put($idFirm,\Mgd\Entity\Product $product)
    {
        return $this->master->put($this->base_url.$idFirm.$this->url,$product->getIdProduct(),$product,$this->entity);
    }

    public function remove($idFirm,\Mgd\Entity\Product $product)
    {
        return $this->master->remove($this->base_url.$idFirm.$this->url,$product->getIdProduct());
    }
}