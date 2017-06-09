<?php

namespace Mgd\Entity;

class Flux extends Master
{
    /**
     * @var Stock
     */
    private $stock;

    /**
     * @var integer
     */
    private $idFlux;

    /**
     * @var integer
     */
    private $incoming;

    /**
     * @var integer
     */
    private $outComing;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @return Stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param Stock $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return int
     */
    public function getIdFlux()
    {
        return $this->idFlux;
    }

    /**
     * @param int $idFlux
     */
    public function setIdFlux($idFlux)
    {
        $this->idFlux = $idFlux;
    }

    /**
     * @return int
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     * @param int $incoming
     */
    public function setIncoming($incoming)
    {
        $this->incoming = $incoming;
    }

    /**
     * @return int
     */
    public function getOutComing()
    {
        return $this->outComing;
    }

    /**
     * @param int $outComing
     */
    public function setOutComing($outComing)
    {
        $this->outComing = $outComing;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

}
