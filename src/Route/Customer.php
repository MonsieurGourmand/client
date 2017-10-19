<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


use Mgd\Mgd;

class Customer
{
    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Customer::class;
        $this->url = '/customers';
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\Customer $customer, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $customer, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Customer $customer, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $customer->getIdCustomer(), $customer, $this->entity, $format);
    }
}