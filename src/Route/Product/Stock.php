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
use Mgd\Mgd;

class Stock
{
    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = \Mgd\Entity\Stock::class;
        $this->url = "/products/" . $product->getIdProduct() . "/stocks";
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        $params = array();
        return $this->master->getAll($url, $this->entity, $params, $format);
    }

    public function get($id,$format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->get($url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\Stock $stock,  $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->post($url, $stock, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Stock $stock, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->put($url, $stock->getIdstock(), $stock, $this->entity, $format);
    }
}