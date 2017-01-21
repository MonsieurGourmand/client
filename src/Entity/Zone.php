<?php

namespace Mgd\Entity;

class Zone
{
    /**
     * @var Stock
     */
    private $parent;

    /**
     * @var integer
     */
    private $idparent;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $idzone;

    /**
     * @return Stock
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return int
     */
    public function getIdparent()
    {
        return $this->idparent;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getIdzone()
    {
        return $this->idzone;
    }
}
