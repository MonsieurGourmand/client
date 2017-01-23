<?php

namespace Mgd\Entity;

class Movement
{
    /**
     * @var integer
     */
    private $name;

    /**
     * @var integer
     */
    private $idmovement;

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getIdmovement()
    {
        return $this->idmovement;
    }

    /**
     * @param int $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $idmovement
     */
    public function setIdmovement($idmovement)
    {
        $this->idmovement = $idmovement;
    }
}
