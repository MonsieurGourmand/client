<?php

namespace Mgd\Route;


class Supplier
{
	/** @var string */
	protected $url = "suppliers";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Supplier::class;
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

    public function post(\Mgd\Entity\Supplier $supplier)
    {
        return $this->master->post($this->url,$supplier,$this->entity);
    }

    public function put(\Mgd\Entity\Supplier $supplier)
    {
        return $this->master->put($this->url,$supplier->getIdsupplier(),$supplier,$this->entity);
    }

    public function remove(\Mgd\Entity\Supplier $supplier)
    {
        return $this->master->remove($this->url,$supplier->getIdsupplier());
    }
}
?>