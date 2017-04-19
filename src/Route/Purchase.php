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
    protected $base_url = "firms/";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Order::class;
    }

    public function getAll($idFirm)
    {
        $params = array();
        return $this->master->getAll($this->base_url.$idFirm.$this->url, $this->entity,$params);
    }

    public function get($idFirm,$id)
    {
        return $this->master->get($this->base_url.$idFirm.$this->url,$id,$this->entity);
    }

    public function post($idFirm,\Mgd\Entity\Order $purchase)
    {
        return $this->master->post($this->base_url.$idFirm.$this->url,$purchase,$this->entity);
    }

    public function put($idFirm,\Mgd\Entity\Order $purchase)
    {
        return $this->master->put($this->base_url.$idFirm.$this->url,$purchase->getIdOrder(),$purchase,$this->entity);
    }

    public function remove($idFirm,\Mgd\Entity\Order $purchase)
    {
        return $this->master->remove($this->base_url.$idFirm.$this->url,$purchase->getIdOrder());
    }
}