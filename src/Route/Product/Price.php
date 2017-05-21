<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Product;

use Mgd\Entity\Firm;
use Mgd\Entity\Product;

class Price
{
    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = \Mgd\Entity\User::class;
        $this->url = "/products/".$product->getIdProduct()."/prices";
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

    public function post(\Mgd\Entity\User $user,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$user,$this->entity,$format);
    }

    public function put(\Mgd\Entity\User $user,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$user->getId(),$user,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\User $user)
    {
        return $this->master->remove($this->url,$user->getId());
    }


}