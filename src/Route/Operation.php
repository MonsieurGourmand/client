<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


class Operation
{
    /** @var string */
    protected $url = "/operations";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Operation::class;
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

    public function post(\Mgd\Entity\Operation $operation)
    {
        return $this->master->post($this->url,$operation,$this->entity);
    }

    public function put(\Mgd\Entity\Operation $operation)
    {
        return $this->master->put($this->url,$operation->getIdOperation(),$operation,$this->entity);
    }

    public function remove(\Mgd\Entity\Operation $operation)
    {
        return $this->master->remove($this->url,$operation->getIdOperation());
    }
}