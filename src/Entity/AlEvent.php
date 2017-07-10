<?php

namespace Mgd\Entity;

class AlEvent extends Master
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var OrderEvent
     *
     */
    private $orderEvent;

    /**
     * @var string
     *
     */
    private $content;

    /**
     * @var string
     *
     */
    private $type;

    /**
     * @var string
     *
     */
    private $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    /**
     * @var \DateTime
     */
    private $eventDate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param string $eventDate
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * @return OrderEvent
     */
    public function getOrderEvent()
    {
        return $this->orderEvent;
    }

    /**
     * @param OrderEvent $orderEvent
     */
    public function setOrderEvent($orderEvent)
    {
        $this->orderEvent = $orderEvent;
    }

}
