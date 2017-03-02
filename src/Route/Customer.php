<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 3/2/17
 * Time: 3:43 PM
 */

namespace Mgd\Route;


class Customer
{
    /** @var string */
    protected $url = "customers";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Customer::class;
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

    public function post(\Mgd\Entity\Customer $customer)
    {
        return $this->master->post($this->url,$customer,$this->entity);
    }

    public function put(\Mgd\Entity\Customer $customer)
    {
        return $this->master->put($this->url,$customer->getIdcustomer(),$customer,$this->entity);
    }

    public function remove(\Mgd\Entity\Customer $customer)
    {
        return $this->master->remove($this->url,$customer->getIdcustomer());
    }
}