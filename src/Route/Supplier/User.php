<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Supplier;

use Mgd\Entity\Firm;
use Mgd\Mgd;

class User
{
    public function __construct(Firm $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = \Mgd\Entity\User::class;
        $this->url = "/suppliers/".$supplier->getIdFirm()."/users";
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

    public function post(\Mgd\Entity\User $user)
    {
        return $this->master->post($this->url,$user,$this->entity);
    }

    public function put(\Mgd\Entity\User $user)
    {
        return $this->master->put($this->url,$user->getId(),$user,$this->entity);
    }

    public function remove(\Mgd\Entity\User $user)
    {
        return $this->master->remove($this->url,$user->getId());
    }


}