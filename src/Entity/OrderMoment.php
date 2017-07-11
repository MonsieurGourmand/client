<?php

namespace Mgd\Entity;

class OrderMoment extends Master
{

    /**
     * @var integer
     */
    private $idOrderMoment;

    /**
     * @var integer
     */
    private $type;


    /**
     * @var integer
     */
    private $pax;

    /**
     * @var string
     */
    private $title;

    /**
     * @return int
     */
    public function getIdOrderMoment()
    {
        return $this->idOrderMoment;
    }

    /**
     * @param int $idOrderMoment
     */
    public function setIdOrderMoment($idOrderMoment)
    {
        $this->idOrderMoment = $idOrderMoment;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


}
