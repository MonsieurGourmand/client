<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Order;

use Mgd\Entity\Order;
use Mgd\Mgd;

class Package
{
    public function __construct(Order $order)
    {
        $this->master = $order->getMaster();
        $this->entity = \Mgd\Entity\Package::class;
        $this->url = Mgd::GROUPS_ROAD.$this->master->me->getFirm()->getIdFirm()."/orders/".$order->getIdOrder()."/packages";
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

    public function post(\Mgd\Entity\Package $package,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$package,$this->entity,$format);
    }

    public function put(\Mgd\Entity\Package $package,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$package->getIdPackage(),$package,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\Package $package)
    {
        return $this->master->remove($this->url,$package->getIdPackage());
    }


}