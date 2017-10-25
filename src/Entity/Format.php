<?php

namespace Mgd\Entity;

class Format extends Master
{
    /**
     * @var integer
     */
    private $idFormat;

    /**
     * @var \Mgd\Route\Format\FormatProduct
     */
    public $formatProducts;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var string
     */
    private $prestation;

    /**
     * @var integer
     */
    private $pax;

    /**
     * @var Customer[]
     */
    private $customers;

    /**
     * @return int
     */
    public function getIdFormat()
    {
        return $this->idFormat;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     * @return Format
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrestation()
    {
        return $this->prestation;
    }

    /**
     * @param mixed $prestation
     * @return Format
     */
    public function setPrestation($prestation)
    {
        $this->prestation = $prestation;
        return $this;
    }

    /**
     * @return int
     */
    public function getPax()
    {
        return $this->pax;
    }

    /**
     * @param int $pax
     * @return Format
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @param mixed $customers
     * @return Format
     */
    public function setCustomers($customers)
    {
        $this->customers = $customers;
        return $this;
    }
}
