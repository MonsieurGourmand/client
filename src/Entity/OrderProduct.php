<?php

namespace Mgd\Entity;

class OrderProduct extends Master
{


    /**
     * @var integer
     *
     */
    private $idOrderProduct;

    /**
     * @var OrderEvent
     */
    private $orderEvent;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var integer
     *
     */
    private $quantity;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var float
     */
    private $vat;

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param float $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
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
     */
    public function setProduct($product)
    {
        $this->product = $product;
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
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getIdOrderProduct()
    {
        return $this->idOrderProduct;
    }

    /**
     * @param int $idOrderProduct
     */
    public function setIdOrderProduct($idOrderProduct)
    {
        $this->idOrderProduct = $idOrderProduct;
    }

    /**
     * @return OrderEvent
     */
    public function getOrderEvent()
    {
        return $this->orderEvent;
    }

    /**
     * @param OrderEvent $orderEvent
     */
    public function setOrderEvent($orderEvent)
    {
        $this->orderEvent = $orderEvent;
    }



}
