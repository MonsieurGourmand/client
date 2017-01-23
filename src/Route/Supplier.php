<?php

namespace Mgd\Route;


class Supplier
{
	/** @var string */
	protected $url = "fournisseurs";

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
        $params = array();

        return $this->master->get($this->url,$id,$this->entity,$params);
    }

    public function post(\Mgd\Entity\Supplier $supplier)
    {
        $params = array();

        return $this->master->post($this->url,$supplier,$this->entity,$params);
    }

    public function put(\Mgd\Entity\Supplier $supplier)
    {
        $params = array();

        return $this->master->put($this->url,$supplier,$this->entity,$params);
    }

    public function remove(\Mgd\Entity\Supplier $supplier)
    {
        $params = array();

        return $this->master->remove($this->url,$supplier,$this->entity,$params);
    }
}
?>