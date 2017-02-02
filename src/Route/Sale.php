<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


class Sale
{
    /** @var string */
    protected $url = "sales";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Sale::class;
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

    public function post(\Mgd\Entity\Sale $sale)
    {
        return $this->master->post($this->url,$sale,$this->entity);
    }

    public function put(\Mgd\Entity\Sale $sale)
    {
        return $this->master->put($this->url,$sale->getIdsale(),$sale,$this->entity);
    }

    public function remove(\Mgd\Entity\Sale $sale)
    {
        return $this->master->remove($this->url,$sale->getIdsale());
    }
}