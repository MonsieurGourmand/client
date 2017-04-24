<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:04 PM
 */

namespace Mgd\Route;


class OrderPurchaseProduct
{
    /** @var string */
    protected $url = "/products";
    protected $base_url = "/purchases/";


    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Product::class;
    }

    public function getAll($idOrder)
    {
        $params = array();
        return $this->master->getAll($this->base_url.$idOrder.$this->url, $this->entity,$params);
    }

    public function get($idOrder,$id)
    {
        return $this->master->get($this->base_url.$idOrder.$this->url,$id,$this->entity);
    }

    public function post($idOrder,\Mgd\Entity\OrderProduct $product)
    {
        return $this->master->post($this->base_url.$idOrder.$this->url,$product,$this->entity);
    }

    public function put($idOrder,\Mgd\Entity\OrderProduct $product)
    {
        return $this->master->put($this->base_url.$idOrder.$this->url,$product->getIdOrderProduct(),$product,$this->entity);
    }

    public function remove($idOrder,\Mgd\Entity\OrderProduct $product)
    {
        return $this->master->remove($this->base_url.$idOrder.$this->url,$product->getIdOrderProduct());
    }
}