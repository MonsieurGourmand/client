<?php

namespace Mgd\Entity;

class Package
{
  /**
   * @var Sale
   */
    private $sale;

    /**
     * @var integer
     */
    private $idsale;

    /**
     * @var Forwarder
     */
    private $forwarder;

    /**
     * @var integer
     */
    private $idforwarder;

    /**
     * @var integer
     */
    private $trackingnumber;

    /**
     * @var \DateTime
     */
    private $shippingdate;


    /**
     * @var \DateTime
     */
    private $actualshippingdate;

    /**
     * @var \DateTime
     */
    private $actualdeliverydate;

    /**
     * @var integer
     */
    private $idpackage;

    /**
    * @var Product[]
    */
    private $products;

    /**
     * @return Sale
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * @return int
     */
    public function getIdsale()
    {
        return $this->idsale;
    }

    /**
     * @return Forwarder
     */
    public function getForwarder()
    {
        return $this->forwarder;
    }

    /**
     * @return int
     */
    public function getIdforwarder()
    {
        return $this->idforwarder;
    }

    /**
     * @return int
     */
    public function getTrackingnumber()
    {
        return $this->trackingnumber;
    }

    /**
     * @return \DateTime
     */
    public function getShippingdate()
    {
        return $this->shippingdate;
    }

    /**
     * @return \DateTime
     */
    public function getActualshippingdate()
    {
        return $this->actualshippingdate;
    }

    /**
     * @return \DateTime
     */
    public function getActualdeliverydate()
    {
        return $this->actualdeliverydate;
    }

    /**
     * @return int
     */
    public function getIdpackage()
    {
        return $this->idpackage;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }
}
