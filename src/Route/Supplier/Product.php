<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Supplier;

class Product
{
    public function __construct(\Mgd\Entity\Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = \Mgd\Entity\Product::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/products";
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        if ($format == \Mgd\Mgd::FORMAT_JSON)
            $params['stopped'] = 'yolo';
        else
            $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\Product $product, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $product, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Product $product, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $product->getIdProduct(), $product, $this->entity, $format);
    }
}