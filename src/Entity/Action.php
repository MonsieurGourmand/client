<?php

namespace Mgd\Entity;

class Action extends Master
{
    /**
     * @var integer
     */
    private $idAction;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Mgd\Route\Action\Task
     */
    public $tasks;

    /**
     * @return int
     */
    public function getIdAction()
    {
        return $this->idAction;
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
