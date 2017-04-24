<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


class Sale
{
    /** @var string */
    protected $url = "/sales";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Order::class;
    }

    public function getAll($idFirm)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params);
    }

    public function get($idFirm,$id)
    {
        return $this->master->get($this->url,$id,$this->entity);
    }

    public function post($idFirm,\Mgd\Entity\Order $sale)
    {
        return $this->master->post($this->url,$sale,$this->entity);
    }

    public function put($idFirm,\Mgd\Entity\Order $sale)
    {
        return $this->master->put($this->url,$sale->getIdOrder(),$sale,$this->entity);
    }

    public function remove($idFirm,\Mgd\Entity\Order $sale)
    {
        return $this->master->remove($this->url,$sale->getIdOrder());
    }
}