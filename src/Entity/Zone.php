<?php

namespace Mgd\Entity;

class Zone
{
    /**
     * @var Zone
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
     * @return Zone
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

    /**
     * @param Zone $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @param int $idparent
     */
    public function setIdparent($idparent)
    {
        $this->idparent = $idparent;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $idzone
     */
    public function setIdzone($idzone)
    {
        $this->idzone = $idzone;
    }
}
