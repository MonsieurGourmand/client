<?php

namespace Mgd\Entity;

class Activity extends Master
{
    /**
     * @var integer
     *
     */
    private $idActivity;

    /**
     * @var Package
     *
     */
    private $package;

    /**
     * @var Event
     *
     */
    private $event;

    /**
     * @var string
     *
     */
    private $activityDate;

    /**
     * @var string
     *
     */
    private $activityLabel;

    /**
     * @var string
     *
     */
    private $code;

    /**
     * @var integer
     *
     */
    private $active;

    /**
     * @var Document
     */
    private $document;

    /**
     * @return int
     */
    public function getIdActivity()
    {
        return $this->idActivity;
    }

    /**
     * @param int $idActivity
     */
    public function setIdActivity($idActivity)
    {
        $this->idActivity = $idActivity;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param Package $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return string
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * @param string $activityDate
     */
    public function setActivityDate($activityDate)
    {
        $this->activityDate = $activityDate;
    }

    /**
     * @return string
     */
    public function getActivityLabel()
    {
        return $this->activityLabel;
    }

    /**
     * @param string $activityLabel
     */
    public function setActivityLabel($activityLabel)
    {
        $this->activityLabel = $activityLabel;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     * @return Activity
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }
}
