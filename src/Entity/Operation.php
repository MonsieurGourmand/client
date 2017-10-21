<?php

namespace Mgd\Entity;

class Operation extends Master
{
    /**
     * @var integer
     */
    private $idOperation;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Mgd\Route\Operation\Task
     */
    public $tasks;

    /**
     * @return int
     */
    public function getIdOperation()
    {
        return $this->idOperation;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}
