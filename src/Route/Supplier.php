<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


class Supplier
{
    /** @var string */
    protected $url = "/suppliers";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Firm::class;
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

    public function post(\Mgd\Entity\Firm $firm)
    {
        return $this->master->post($this->url,$firm,$this->entity);
    }

    public function put(\Mgd\Entity\Firm $firm)
    {
        return $this->master->put($this->url,$firm->getIdFirm(),$firm,$this->entity);
    }

    public function remove(\Mgd\Entity\Firm $firm)
    {
        return $this->master->remove($this->url,$firm->getIdFirm());
    }


}