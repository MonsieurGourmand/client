<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:09 PM
 */

namespace Mgd\Route;


class Subcategory
{
    /** @var string */
    protected $url = "souscategories";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Subcategory::class;
    }

    public function getAll()
    {
        $params = array();

        return $this->master->getAll($this->url, $this->entity,$params);
    }

    public function get($id)
    {
        $params = array();

        return $this->master->get($this->url,$id,$this->entity,$params);
    }

    public function post(\Mgd\Entity\Subcategory $subCategory)
    {
        $params = array();

        return $this->master->post($this->url,$subCategory,$this->entity,$params);
    }

    public function put(\Mgd\Entity\Subcategory $subCategory)
    {
        $params = array();

        return $this->master->put($this->url,$subCategory,$this->entity,$params);
    }

    public function delete(\Mgd\Entity\Subcategory $subCategory)
    {
        $params = array();

        return $this->master->delete($this->url,$subCategory,$this->entity,$params);
    }
}