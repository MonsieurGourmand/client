<?php

namespace Mgd\Entity;

class Operation extends Master
{
    /**
     * @var integer
     */
    private $idOperation;

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
     * @var \Mgd\Route\Operation\Event
     */
    public $events;


    /**
     * @return int
     */
    public function getIdOperation()
    {
        return $this->idOperation;
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
     * @return Operation
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
     * @return Operation
     */
    public function setLeadUser($leadUser)
    {
        $this->leadUser = $leadUser;
        return $this;
    }


}
