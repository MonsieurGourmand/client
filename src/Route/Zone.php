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
    protected $url = "zones";

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
        $params = array();
        return $this->master->get($this->url,$id,$this->entity,$params);
    }

    public function post(\Mgd\Entity\Zone $zone)
    {
        return $this->master->post($this->url,$zone);
    }

    public function put(\Mgd\Entity\Zone $zone)
    {
        return $this->master->put($this->url,$zone);
    }

    public function remove(\Mgd\Entity\Zone $zone)
    {
        return $this->master->remove($this->url,$zone->getIdzone());
    }
}