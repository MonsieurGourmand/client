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
use Mgd\Entity\Supplier;
use Mgd\Mgd;

class Price
{
    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = \Mgd\Entity\Price::class;
        $this->url = "/products/" . $product->getIdProduct() . "/prices";
    }

    public function getAll(Supplier $supplier = null, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        $params = array();
        return $this->master->getAll($url, $this->entity, $params, $format);
    }

    public function get($id, Supplier $supplier = null, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->get($url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\Price $price, Supplier $supplier = null, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->post($url, $price, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Price $price, Supplier $supplier = null, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->put($url, $price->getIdPrice(), $price, $this->entity, $format);
    }
}