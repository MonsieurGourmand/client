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
     * @var \Mgd\Route\Operation\Activity
     */
    public $activities;

    /**
     * @var \DateTime
     */
    private $operationDate;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $transport;

    /**
     * @var integer
     */
    private $service;

    /**
     * @var integer
     */
    private $documents;

    /**
     * @var integer
     */
    private $tPreparation;

    /**
     * @var integer
     */
    private $tTransport;

    /**
     * @var integer
     */
    private $tDefrost;

    /**
     * @var Document
     */
    private $document;


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

    /**
     * @return \DateTime
     */
    public function getOperationDate()
    {
        return $this->operationDate;
    }

    /**
     * @param \DateTime $operationDate
     * @return Operation
     */
    public function setOperationDate($operationDate)
    {
        $this->operationDate = $operationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Operation
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param mixed $transport
     * @return Operation
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     * @return Operation
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     * @return Operation
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTPreparation()
    {
        return $this->tPreparation;
    }

    /**
     * @param mixed $tPreparation
     * @return Operation
     */
    public function setTPreparation($tPreparation)
    {
        $this->tPreparation = $tPreparation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTTransport()
    {
        return $this->tTransport;
    }

    /**
     * @param mixed $tTransport
     * @return Operation
     */
    public function setTTransport($tTransport)
    {
        $this->tTransport = $tTransport;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTDefrost()
    {
        return $this->tDefrost;
    }

    /**
     * @param mixed $tDefrost
     * @return Operation
     */
    public function setTDefrost($tDefrost)
    {
        $this->tDefrost = $tDefrost;
        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     * @return Operation
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }


}
