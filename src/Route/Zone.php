<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


class Zone
{
    /** @var string */
    protected $url = "/zones";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Zone::class;
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

    public function post(\Mgd\Entity\Zone $zone)
    {
        return $this->master->post($this->url,$zone,$this->entity);
    }

    public function put(\Mgd\Entity\Zone $zone)
    {
        return $this->master->put($this->url,$zone->getIdzone(),$zone,$this->entity);
    }

    public function remove(\Mgd\Entity\Zone $zone)
    {
        return $this->master->remove($this->url,$zone->getIdzone());
    }
}