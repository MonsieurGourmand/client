<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Firm;

use Mgd\Entity\Firm;

class Product
{
    public function __construct(Firm $firm)
    {
        $this->master = $firm->getMaster();
        $this->entity = \Mgd\Entity\Product::class;
        $this->url = "firms/".$firm->getIdFirm()."/products";
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

    public function post(\Mgd\Entity\Product $product)
    {
        return $this->master->post($this->url,$product,$this->entity);
    }

    public function put(\Mgd\Entity\Product $product)
    {
        return $this->master->put($this->url,$product->getIdProduct(),$product,$this->entity);
    }

    public function remove(\Mgd\Entity\Product $product)
    {
        return $this->master->remove($this->url,$product->getIdProduct());
    }


}