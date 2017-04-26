<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/19/17
 * Time: 4:59 PM
 */

namespace Mgd\Entity;


use Mgd\Mgd;

class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Mgd
     */
    protected $master;
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $username;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @return Mgd
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * @param Mgd $master
     */
    public function setMaster($master)
    {
        $this->master = $master;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param Firm $firm
     */
    public function setFirm($firm)
    {
        $this->firm = $firm;
    }

    /**
     * @var Firm
     */
    private $firm;

    /**
     * @var array
     */
    private $roles;

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return Firm
     */
    public function getFirm()
    {
        return $this->firm;
    }
}