<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/19/17
 * Time: 4:59 PM
 */

namespace Mgd\Entity;

class Prospect extends Master
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var bool $enabled
     */
    private $enabled;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $phone
     */
    private $phone;

    /**
     * @var string $mobile
     */
    private $mobile;

    /**
     * @var string $address
     */
    private $address;

    /**
     * @var bool $notification
     */
    private $notification;

    /**
     * @var array
     */
    private $roles;

    /**
     * @var \Mgd\Route\Prospect\ProspectDownload
     */
    public $downloads;

    /**
     * @var \Mgd\Route\Prospect\ProspectMessage
     */
    public $messages;

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
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return bool
     */
    public function isNotification()
    {
        return $this->notification;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param bool $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
    }

    /**
     * @param array $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return \Mgd\Route\Prospect\ProspectDownload
     */
    public function getDownloads()
    {
        return $this->downloads;
    }

    /**
     * @param \Mgd\Route\Prospect\ProspectDownload $downloads
     * @return Prospect
     */
    public function setDownloads($downloads)
    {
        $this->downloads = $downloads;
        return $this;
    }

    /**
     * @return \Mgd\Route\Prospect\ProspectMessage
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param \Mgd\Route\Prospect\ProspectMessage $messages
     * @return Prospect
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }
}