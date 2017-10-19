<?php

namespace Mgd\Entity;

class Ope extends Master
{
    /**
     * @var integer
     */
    private $idOpe;

    /**
     * @var Customer
     *
     */
    private $customer;

    /**
     * @var User
     */
    private $leadUser;

    /**
     * @return int
     */
    public function getIdOpe()
    {
        return $this->idOpe;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return Ope
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLeadUser()
    {
        return $this->leadUser;
    }

    /**
     * @param mixed $leadUser
     * @return Ope
     */
    public function setLeadUser($leadUser)
    {
        $this->leadUser = $leadUser;
        return $this;
    }


}
