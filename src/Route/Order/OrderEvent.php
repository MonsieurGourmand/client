<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Order;

use Mgd\Entity\Order;

class OrderEvent
{
    public function __construct(Order $order)
    {
        $this->master = $order->getMaster();
        $this->entity = \Mgd\Entity\OrderEvent::class;
        $this->url = "/orders/" . $order->getIdOrder() . "/events";
        $this->idOrder = $order->getIdOrder();
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        if ($format != \Mgd\Mgd::FORMAT_PDF)
            return $this->master->get($this->url, $id, $this->entity, $format);
        else
            return $this->master->get("/purchases/" .$this->idOrder."/events", $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\OrderEvent $orderEvent, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $orderEvent, $this->entity, $format);
    }

    public function put(\Mgd\Entity\OrderEvent $orderEvent, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $orderEvent->getidOrderEvent(), $orderEvent, $this->entity, $format);
    }
}