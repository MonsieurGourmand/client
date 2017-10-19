<?php

namespace Mgd\Entity;

class OpeEventProduct extends Master
{
    /**
     * @var integer
     */
    private $idOpeEvent;

    /**
     * @var OpeEvent
     */
    private $opeEvent;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @return int
     */
    public function getIdOpeEvent()
    {
        return $this->idOpeEvent;
    }

    /**
     * @return OpeEvent
     */
    public function getOpeEvent()
    {
        return $this->opeEvent;
    }

    /**
     * @param OpeEvent $opeEvent
     * @return OpeEventProduct
     */
    public function setOpeEvent($opeEvent)
    {
        $this->opeEvent = $opeEvent;
        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return OpeEventProduct
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return OpeEventProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
}
