<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Event;

use Mgd\Mgd;

class EventProduct
{
    public function __construct(\Mgd\Entity\Event $event)
    {
        $this->master = $event->getMaster();
        $this->entity = \Mgd\Entity\EventProduct::class;
        $this->url = "operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/products";
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\EventProduct $eventProduct, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $eventProduct, $this->entity, $format);
    }

    public function put(\Mgd\Entity\EventProduct $eventProduct, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $eventProduct->getIdEventProduct(), $eventProduct, $this->entity, $format);
    }

    public function remove(\Mgd\Entity\EventProduct $eventProduct)
    {
        return $this->master->remove($this->url, $eventProduct->getIdEventProduct());
    }

}