<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;



use Mgd\Entity\OrderProduct;

class Purchase
{
    /** @var string */
    protected $url = "/purchases";
    private $url_products = "/products";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Order::class;
        $this->orderProduct = \Mgd\Entity\OrderProduct::class;
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

    public function post(\Mgd\Entity\Order $purchase)
    {
        return $this->master->post($this->url,$purchase,$this->entity);
    }

    public function put(\Mgd\Entity\Order $purchase)
    {
        return $this->master->put($this->url,$purchase->getIdOrder(),$purchase,$this->entity);
    }

    public function remove(\Mgd\Entity\Order $purchase)
    {
        return $this->master->remove($this->url,$purchase->getIdOrder());
    }

    public function getOrderProducts($idOrder)
    {
        return $this->master->getAll($this->url.'/'.$this->get($idOrder)->getIdOrder().$this->url_products,$this->orderProduct);
    }

    public function getOrderProduct($idOrder,$idProduct)
    {
        return $this->master->get($this->url.'/'.$this->get($idOrder)->getIdOrder().$this->url_products,$idProduct,$this->orderProduct);
    }

    public function addOrderProduct($idOrder,OrderProduct $orderProduct)
    {
        return $this->master->post($this->url.'/'.$this->get($idOrder)->getIdOrder().$this->url_products,$orderProduct,$this->orderProduct);
    }

    public function putOrderProduct($idOrder,OrderProduct $orderProduct)
    {
        return $this->master->put($this->url.'/'.$this->get($idOrder)->getIdOrder().$this->url_products,$orderProduct->getIdOrderProduct(),$orderProduct,$this->orderProduct);
    }

    public function deleteOrderProduct($idOrder,OrderProduct $orderProduct)
    {
        return $this->master->remove($this->url.'/'.$this->get($idOrder)->getIdOrder().$this->url_products,$orderProduct->getIdOrderProduct());
    }
}