<?php

namespace Mgd\Entity;

class ProspectDownload extends Master
{
    /**
     * @var int
     */
    private $idDownload;

    /**
     * @var string
     */
    private $type;

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
    public function getIdDownload()
    {
        return $this->idDownload;
    }

    /**
     * @param int $idDownload
     * @return ProspectDownload
     */
    public function setIdDownload($idDownload)
    {
        $this->idDownload = $idDownload;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return ProspectDownload
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return ProspectDownload
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
     * @return ProspectDownload
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}
