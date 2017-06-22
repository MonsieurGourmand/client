<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


class Purchase
{
    /** @var string */
    protected $url = "/purchases";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Order::class;
    }

    public function getAll($format=\Mgd\Mgd::FORMAT_OBJECT,$startDate=null,$endDate=null)
    {
        $params = array();
        if($startDate && $endDate)
        {
            $params['startDate'] = $startDate;
            $params['endDate'] = $endDate;
        }
        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }

    public function post(\Mgd\Entity\Order $purchase,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$purchase,$this->entity,$format);
    }

    public function put(\Mgd\Entity\Order $purchase,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$purchase->getIdOrder(),$purchase,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\Order $purchase)
    {
        return $this->master->remove($this->url,$purchase->getIdOrder());
    }
}