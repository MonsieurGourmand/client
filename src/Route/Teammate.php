<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace Mgd\Route;


class Teammate
{
    /** @var string */
    protected $url = "/teammates";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\User::class;
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

    public function post(\Mgd\Entity\User $teammate)
    {
        return $this->master->post($this->url,$teammate,$this->entity);
    }

    public function put(\Mgd\Entity\User $teammate)
    {
        return $this->master->put($this->url,$teammate->getId(),$teammate,$this->entity);
    }

    public function remove(\Mgd\Entity\User $teammate)
    {
        return $this->master->remove($this->url,$teammate->getId());
    }
}