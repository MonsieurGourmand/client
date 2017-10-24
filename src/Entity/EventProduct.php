<?php

namespace Mgd\Entity;

class EventProduct extends Master
{
    /**
     * @var integer
     */
    private $idEventProduct;

    /**
     * @var Event
     */
    private $event;

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
    public function getIdEventProduct()
    {
        return $this->idEventProduct;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     * @return EventProduct
     */
    public function setEvent($event)
    {
        $this->event = $event;
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
     * @return EventProduct
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
     * @return EventProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
}
