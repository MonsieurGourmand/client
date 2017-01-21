<?php

namespace Mgd\Route;


class SupplierProduct
{
    /** @var string */
    protected $url = "catalogue";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\SupplierProduct::class;
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

    public function post(\Mgd\Entity\SupplierProduct $supplierProduct)
    {
        $params = array();

        return $this->master->post($this->url,$supplierProduct,$this->entity,$params);
    }

    public function put(\Mgd\Entity\SupplierProduct $supplierProduct)
    {
        $params = array();

        return $this->master->put($this->url,$supplierProduct,$this->entity,$params);
    }

    public function delete(\Mgd\Entity\SupplierProduct $supplierProduct)
    {
        $params = array();

        return $this->master->delete($this->url,$supplierProduct,$this->entity,$params);
    }
}
?>