<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Stock;

use Mgd\Entity\Firm;
use Mgd\Entity\Product;
use Mgd\Mgd;

class Flux
{
    public function __construct(\Mgd\Entity\Stock $stock)
    {
        $this->master = $stock->getMaster();
        $this->entity = \Mgd\Entity\Flux::class;
        $this->url = "/products/" . $stock->getProduct()->getIdProduct() . "/stocks/" . $stock->getIdStock() . "/fluxes";
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        $params = array();
        return $this->master->getAll($url, $this->entity, $params, $format);
    }

    public function get($id, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->get($url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\Flux $flux, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->post($url, $flux, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Flux $flux, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->put($url, $flux->getIdFlux(), $flux, $this->entity, $format);
    }
}