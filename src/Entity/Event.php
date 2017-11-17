<?php

namespace Mgd\Entity;

class Event extends Master
{
    /**
     * @var integer
     *
     */
    private $idEvent;

    /**
     * @var string
     */
    private $place;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $reservationNumber;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var integer
     */
    private $status = 0;

    /**
     * @var string
     */
    private $step;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $corporateName;

    /**
     * @var string
     *
     */
    private $country;

    /**
     * @var string
     *
     */
    private $mail;

    /**
     * @var string
     *
     */
    private $phone;

    /**
     * @var string
     */
    private $deliveryReference;

    /**
     * @var User
     */
    private $supportUser;


    /**
     * @var Operation
     */
    private $operation;

    /**
     * @var Document
     */
    private $document;

    private $orderReference;

    private $lastEvent;

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
     * @var \Mgd\Route\Event\EventProduct
     */
    public $eventProducts;

    /**
     * @var \Mgd\Route\Event\Package
     */
    public $package;

    /**
     * @var Format
     */
    private $format;

    /**
     * @var string
     */
    private $recipient;

    /**
     * @var User
     */
    private $contact;


    /**
     * @return int
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     * @return Event
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return Event
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Event
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getReservationNumber()
    {
        return $this->reservationNumber;
    }

    /**
     * @param string $reservationNumber
     * @return Event
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->reservationNumber = $reservationNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     * @return Event
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Event
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param string $step
     * @return Event
     */
    public function setStep($step)
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     * @return Event
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
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
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return Event
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Event
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryReference()
    {
        return $this->deliveryReference;
    }

    /**
     * @param string $deliveryReference
     * @return Event
     */
    public function setDeliveryReference($deliveryReference)
    {
        $this->deliveryReference = $deliveryReference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupportUser()
    {
        return $this->supportUser;
    }

    /**
     * @param mixed $supportUser
     * @return Event
     */
    public function setSupportUser($supportUser)
    {
        $this->supportUser = $supportUser;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param mixed $operation
     * @return Event
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     * @return Event
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param mixed $orderReference
     * @return Event
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastEvent()
    {
        return $this->lastEvent;
    }

    /**
     * @param mixed $lastEvent
     * @return Event
     */
    public function setLastEvent($lastEvent)
    {
        $this->lastEvent = $lastEvent;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param int $transport
     * @return Event
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param int $service
     * @return Event
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param int $documents
     * @return Event
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * @return int
     */
    public function getTPreparation()
    {
        return $this->tPreparation;
    }

    /**
     * @param int $tPreparation
     * @return Event
     */
    public function setTPreparation($tPreparation)
    {
        $this->tPreparation = $tPreparation;
        return $this;
    }

    /**
     * @return int
     */
    public function getTTransport()
    {
        return $this->tTransport;
    }

    /**
     * @param int $tTransport
     * @return Event
     */
    public function setTTransport($tTransport)
    {
        $this->tTransport = $tTransport;
        return $this;
    }

    /**
     * @return int
     */
    public function getTDefrost()
    {
        return $this->tDefrost;
    }

    /**
     * @param int $tDefrost
     * @return Event
     */
    public function setTDefrost($tDefrost)
    {
        $this->tDefrost = $tDefrost;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Event
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return Format
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param Format $format
     * @return Event
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     * @return Event
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return User
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param User $contact
     * @return Event
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorporateName()
    {
        return $this->corporateName;
    }

    /**
     * @param string $corporateName
     * @return Event
     */
    public function setCorporateName($corporateName)
    {
        $this->corporateName = $corporateName;
        return $this;
    }
}
