<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Purchase;

use Mgd\Entity\Purchase;

class PurchaseProduct
{
    public function __construct(Purchase $purchase)
    {
        $this->master = $purchase->getMaster();
        $this->entity = \Mgd\Entity\PurchaseProduct::class;
        $this->url = "/purchases/".$purchase->getIdPurchase()."/products";
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

    public function post(\Mgd\Entity\PurchaseProduct $purchaseProduct,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url,$purchaseProduct,$this->entity,$format);
    }

    public function put(\Mgd\Entity\PurchaseProduct $purchaseProduct,$format=\Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url,$purchaseProduct->getIdPurchaseProduct(),$purchaseProduct,$this->entity,$format);
    }

    public function remove(\Mgd\Entity\PurchaseProduct $purchaseProduct)
    {
        return $this->master->remove($this->url,$purchaseProduct->getIdPurchaseProduct());
    }


}