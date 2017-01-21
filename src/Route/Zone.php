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
        $params = array();

        return $this->master->post($this->url,$zone,$this->entity,$params);
    }

    public function put(\Mgd\Entity\Zone $zone)
    {
        $params = array();

        return $this->master->put($this->url,$zone,$this->entity,$params);
    }

    public function delete(\Mgd\Entity\Zone $zone)
    {
        $params = array();

        return $this->master->delete($this->url,$zone,$this->entity,$params);
    }
}