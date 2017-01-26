<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 5:54 PM
 */

namespace Mgd\Route;


class SupplierContact
{
    /** @var string */
    protected $url = "fournisseurs";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\SupplierContact::class;
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

    public function post(\Mgd\Entity\SupplierContact $supplierContact)
    {
        return $this->master->post($this->url,$supplierContact,$this->entity);
    }

    public function put(\Mgd\Entity\SupplierContact $supplierContact)
    {
        return $this->master->put($this->url,$supplierContact->getIdsuppliercontact(),$supplierContact,$this->entity);
    }

    public function remove(\Mgd\Entity\SupplierContact $supplierContact)
    {
        return $this->master->remove($this->url,$supplierContact->getIdsuppliercontact());
    }
}