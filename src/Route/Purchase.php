<?php

namespace Mgd\Route;


class Purchase
{
    /** @var string */
    protected $url = "purchases";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Purchase::class;
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

    public function post(\Mgd\Entity\Purchase $purchase)
    {
        return $this->master->post($this->url,$purchase,$this->entity);
    }

    public function put(\Mgd\Entity\Purchase $purchase)
    {
        return $this->master->put($this->url,$purchase->getIdpurchase(),$purchase,$this->entity);
    }

    public function remove(\Mgd\Entity\Purchase $purchase)
    {
        return $this->master->remove($this->url,$purchase->getIdpurchase());
    }
}
?>