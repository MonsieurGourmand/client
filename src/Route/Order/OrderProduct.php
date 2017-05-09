<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Order;

use Mgd\Entity\Order;

class OrderProduct
{
    public function __construct(Order $order)
    {
        $this->master = $order->getMaster();
        $this->entity = \Mgd\Entity\OrderProduct::class;
        $this->url = "/orders/".$order->getIdOrder()."/products";
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

    public function post(\Mgd\Entity\OrderProduct $orderProduct)
    {
        return $this->master->post($this->url,$orderProduct,$this->entity);
    }

    public function put(\Mgd\Entity\OrderProduct $orderProduct)
    {
        return $this->master->put($this->url,$orderProduct->getIdOrderProduct(),$orderProduct,$this->entity);
    }

    public function remove(\Mgd\Entity\OrderProduct $orderProduct)
    {
        return $this->master->remove($this->url,$orderProduct->getIdOrderProduct());
    }


}