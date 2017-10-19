<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route;


use Mgd\Mgd;

class Stat
{
    /** @var \DateTime $startDate */
    protected $startDate;

    /** @var \DateTime $endDate */
    protected $endDate;

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->url = '/stats';
        $this->startDate = new \DateTime("last month");
        $this->endDate = new \DateTime();
    }

    public function getOrders()
    {
        $params = array(
            "startDate" => $this->startDate->format("d/m/Y"),
            "endDate" => $this->endDate->format("d/m/Y")
        );
        $url = $this->url."/orders";
        return $this->master->getAll($url,null,$params,\Mgd\Mgd::FORMAT_JSON);
    }

    public function getProducts()
    {
        $params = array(
            "startDate" => $this->startDate->format("d/m/Y"),
            "endDate" => $this->endDate->format("d/m/Y")
        );
        $url = $this->url."/products";
        return $this->master->getAll($url,null,$params,\Mgd\Mgd::FORMAT_JSON);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Stat
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Stat
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}