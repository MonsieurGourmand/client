<?php

namespace Mgd\Entity;

class Stock extends Master
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @var \DateTime
     */
    private $expirationDate;

    /**
     * @var integer
     */
    private $idStock;


    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var \Mgd\Route\Stock\Flux
     */
    public $fluxes;

    /**
     * @return bool
     */
    public function isAlert()
    {
        return $this->alert;
    }

    /**
     * @var boolean
     */
    private $alert;

    /**
     * @var boolean
     */
    private $sleeping;

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
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTime $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return int
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * @param int $idStock
     */
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;
    }

    /**
     * @return bool
     */
    public function isSleeping()
    {
        return $this->sleeping;
    }

    /**
     * @param bool $sleeping
     * @return Stock
     */
    public function setSleeping($sleeping)
    {
        $this->sleeping = $sleeping;
        return $this;
    }


}
