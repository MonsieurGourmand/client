<?php

namespace Mgd\Entity;

class ProspectMessage extends Master
{
    /**
     * @var int
     */
    private $idMessage;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * @var Prospect
     */
    private $prospect;

    /**
     * @return int
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * @param int $idMessage
     * @return ProspectMessage
     */
    public function setIdMessage($idMessage)
    {
        $this->idMessage = $idMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ProspectMessage
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return ProspectMessage
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Prospect
     */
    public function getProspect()
    {
        return $this->prospect;
    }

    /**
     * @param Prospect $prospect
     */
    public function setProspect($prospect)
    {
        $this->prospect = $prospect;
    }
}
