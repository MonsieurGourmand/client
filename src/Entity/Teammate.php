<?php

namespace Mgd\Entity;

class Teammate
{
    /**
     * @var Contact
     */
    private $contact;

    /**
     * @var integer
     */
    private $idteammate;

    /**
     * Get idteammate
     */
    public function getIdteammate()
    {
        return $this->idteammate;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }
}
