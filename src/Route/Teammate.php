<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:01 PM
 */

namespace Mgd\Route;


class Teammate
{
    /** @var string */
    protected $url = "equipe";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Teammate::class;
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

    public function post(\Mgd\Entity\Teammate $teammate)
    {
        $params = array();

        return $this->master->post($this->url,$teammate,$this->entity,$params);
    }

    public function put(\Mgd\Entity\Teammate $teammate)
    {
        $params = array();

        return $this->master->put($this->url,$teammate,$this->entity,$params);
    }

    public function delete(\Mgd\Entity\Teammate $teammate)
    {
        $params = array();

        return $this->master->delete($this->url,$teammate,$this->entity,$params);
    }
}