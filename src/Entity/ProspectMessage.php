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
     * @var User
     */
    private $user;

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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return ProspectMessage
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}
