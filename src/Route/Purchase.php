<?php

namespace Mgd\Route;


class Purchase
{
    /** @var string */
    protected $url = "achats";

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
        $params = array();

        return $this->master->get($this->url,$id,$this->entity,$params);
    }

    public function post(\Mgd\Entity\Purchase $purchase)
    {
        $params = array();

        return $this->master->post($this->url,$purchase,$this->entity,$params);
    }

    public function put(\Mgd\Entity\Purchase $purchase)
    {
        $params = array();

        return $this->master->put($this->url,$purchase,$this->entity,$params);
    }

    public function delete(\Mgd\Entity\Purchase $purchase)
    {
        $params = array();

        return $this->master->delete($this->url,$purchase,$this->entity,$params);
    }
}
?>