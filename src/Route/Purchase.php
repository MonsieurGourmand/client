<?php

namespace Mgd\Route;


class Purchase
{
    /** @var string */
    protected $url = "purchases";

    /** @var \DateTime */
    protected $start;

    /** @var \DateTime */
    protected $end;

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Purchase::class;
    }

    public function getAll()
    {
        $params = array();
        if($this->start) $params["start"] = $this->start;        
        if($this->end) $params["end"] = $this->end;        
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