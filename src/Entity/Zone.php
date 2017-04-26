<?php

namespace Mgd\Entity;

class Zone extends Master
{
    /**
     * @var Zone
     */
    private $parent;

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