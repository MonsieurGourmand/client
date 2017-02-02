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

    public function reset()
    {
        if($this->start) $this->start = NULL;
        if($this->end) $this->end = NULL;
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

    /**
     * @param \DateTime $start
     */
    public function setStart($start)
    {
        $this->start = $start->format('Y-m-d H:i:s');
    }

    /**
     * @param \DateTime $end
     */
    public function setEnd($end)
    {
        $this->end = $end->format('Y-m-d H:i:s');
    }
}
?>