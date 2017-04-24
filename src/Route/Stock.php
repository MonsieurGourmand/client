<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


class Stock
{
    /** @var string */
    protected $url = "/stocks";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Stock::class;
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

    public function post(\Mgd\Entity\Stock $stock)
    {
        return $this->master->post($this->url,$stock,$this->entity);
    }

    public function put(\Mgd\Entity\Stock $stock)
    {
        return $this->master->put($this->url,$stock->getIdstock(),$stock,$this->entity);
    }

    public function remove(\Mgd\Entity\Stock $stock)
    {
        return $this->master->remove($this->url,$stock->getIdstock());
    }
}