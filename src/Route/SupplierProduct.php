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
        return $this->master->get($this->url,$id,$this->entity);
    }

    public function post(\Mgd\Entity\SupplierProduct $supplierProduct)
    {
        return $this->master->post($this->url,$supplierProduct,$this->entity);
    }

    public function put(\Mgd\Entity\SupplierProduct $supplierProduct)
    {
        return $this->master->put($this->url,$supplierProduct->getIdsupplierproduct(),$supplierProduct,$this->entity);
    }

    public function remove(\Mgd\Entity\SupplierProduct $supplierProduct)
    {
        return $this->master->remove($this->url,$supplierProduct->getIdsupplierproduct());
    }
}
?>