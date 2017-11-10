<?php

namespace Mgd\Entity;


class Customer extends Master
{
    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slideShare;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var \Mgd\Route\Customer\User
     */
    public $users;

    /**
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
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

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getSlideShare()
    {
        return $this->slideShare;
    }

    /**
     * @param string $slideShare
     * @return Customer
     */
    public function setSlideShare($slideShare)
    {
        $this->slideShare = $slideShare;
        return $this;
    }


}
