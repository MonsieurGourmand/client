<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Event;

use Mgd\Mgd;

class Package
{
    public function __construct(\Mgd\Entity\Event $event)
    {
        $this->master = $event->getMaster();
        $this->entity = \Mgd\Entity\Package::class;
        $this->url = "/operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/packages";
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

    public function post(\Mgd\Entity\Package $package, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $package, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Package $package, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $package->getIdPackage(), $package, $this->entity, $format);
    }

    public function remove(\Mgd\Entity\Package $package)
    {
        return $this->master->remove($this->url, $package->getIdPackage());
    }

}