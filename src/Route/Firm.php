<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace Mgd\Route;


class Firm
{

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Firm::class;
    }

    public function getAll()
    {
        $params = array();
        return $this->master->getAll('', $this->entity,$params);
    }

    public function get($id)
    {
        return $this->master->get('',$id,$this->entity);
    }

    public function post(\Mgd\Entity\Firm $firm)
    {
        return $this->master->post('',$firm,$this->entity);
    }

    public function put(\Mgd\Entity\Firm $firm)
    {
        return $this->master->put('',$firm->getIdFirm(),$firm,$this->entity);
    }

    public function remove(\Mgd\Entity\Firm $firm)
    {
        return $this->master->remove('',$firm->getIdFirm());
    }
}