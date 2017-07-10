<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\OrderEvent;

use Mgd\Entity\Order;

class AlEvent
{
    public function __construct(\Mgd\Entity\OrderEvent $orderEvent)
    {
        $this->master = $orderEvent->getMaster();
        $this->entity = \Mgd\Entity\AlEvent::class;
        $this->url = "/orders/".$orderEvent->getOrder()->getIdOrder()."/events/".$orderEvent->getIdOrderEvent()."/alevents";
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

    public function post(\Mgd\Entity\AlEvent $alevent,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$alevent,$this->entity,$format);
    }

    public function put(\Mgd\Entity\AlEvent $alevent,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$alevent->getId(),$alevent,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\AlEvent $alevent)
    {
        return $this->master->remove($this->url,$alevent->getId());
    }


}