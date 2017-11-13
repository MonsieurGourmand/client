<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace Mgd\Route\Operation;


use Mgd\Entity\Operation;

class Activity
{
    public function __construct(Operation $operation)
    {
        $this->master = $operation->getMaster();
        $this->entity = \Mgd\Entity\Activity::class;
        $this->url = "/operations/" . $operation->getIdOperation() . "/activities";
    }

    public function getAll($format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\Mgd\Entity\Activity $activity, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $activity, $this->entity, $format);
    }

    public function put(\Mgd\Entity\Activity $activity, $format = \Mgd\Mgd::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $activity->getIdActivity(), $activity, $this->entity, $format);
    }

    public function remove(\Mgd\Entity\Activity $activity)
    {
        return $this->master->remove($this->url, $activity->getIdActivity());
    }

}