<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\OrderMoment;

use Mgd\Entity\Order;

class OrderProduct
{
    public function __construct(\Mgd\Entity\OrderMoment $orderMoment)
    {
        $this->master = $orderMoment->getMaster();
        $this->entity = \Mgd\Entity\OrderProduct::class;
        $this->url = "/orders/".$orderMoment->getOrderEvent()->getOrder()->getidOrder()."/events/".$orderMoment->getOrderEvent()->getIdOrderEvent()."/moments/".$orderMoment->getIdOrderMoment()."/products";
    }

    public function getAll($format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }
}