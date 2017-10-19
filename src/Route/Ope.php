<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


use Mgd\Mgd;

class Ope
{
    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Ope::class;
        $this->url = '/ope';
    }

    public function getAll($format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params,$format);
    }

    public function get($id,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url,$id,$this->entity,$format);
    }

    public function post(\Mgd\Entity\Ope $ope,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$ope,$this->entity,$format);
    }

    public function put(\Mgd\Entity\Ope $ope,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$ope->getIdOpe(),$ope,$this->entity,$format);
    }
}