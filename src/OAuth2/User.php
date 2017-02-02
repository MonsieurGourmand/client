<?php

namespace Mgd\OAuth2;

class User
{
    private $id;

    private $username;

    private $salt;

    private $password;

    private $isActive;

    private $droits;

    private $apiKey;

    private $prodApiKey;
    
    private $sandboxApiKey;
    
    public function getId()
    {
        return $this->id;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setDroits($droits)
    {
        $this->droits = $droits;
        return $this;
    }

    public function getDroits()
    {
        return $this->droits;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getProdApiKey()
    {
        return $this->prodApiKey;
    }

    public function getSandboxApiKey()
    {
        return $this->sandboxApiKey;
    }
}
