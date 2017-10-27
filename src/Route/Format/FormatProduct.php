<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Format;

use Mgd\Mgd;

class FormatProduct
{
    public function __construct(\Mgd\Entity\Format $format)
    {
        $this->master = $format->getMaster();
        $this->entity = \Mgd\Entity\FormatProduct::class;
        $this->url = "/formats/" . $format->getIdFormat() . "/products";
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\FormatProduct $formatProduct, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $formatProduct, $this->entity, $format);
    }

    public function put(\Mgd\Entity\FormatProduct $formatProduct, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $formatProduct->getIdFormatProduct(), $formatProduct, $this->entity, $format);
    }

    public function remove(\Mgd\Entity\FormatProduct $formatProduct)
    {
        return $this->master->remove($this->url, $formatProduct->getIdFormatProduct());
    }

}