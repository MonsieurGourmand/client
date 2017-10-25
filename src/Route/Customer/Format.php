<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Customer;

use Mgd\Mgd;

class Format
{
    public function __construct(\Mgd\Entity\Customer $customer)
    {
        $this->master = $customer->getMaster();
        $this->entity = \Mgd\Entity\Format::class;
        $this->url = "/customers/" . $customer->getIdCustomer() . "/formats";
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

    public function post(\Mgd\Entity\Format $formatObject, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $formatObject, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Format $formatObject, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $formatObject->getIdFormat(), $formatObject, $this->entity, $format);
    }
}