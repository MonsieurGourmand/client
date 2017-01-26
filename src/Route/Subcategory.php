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
        return $this->master->get($this->url,$id,$this->entity);
    }

    public function post(\Mgd\Entity\Subcategory $subCategory)
    {
        return $this->master->post($this->url,$subCategory,$this->entity);
    }

    public function put(\Mgd\Entity\Subcategory $subCategory)
    {
        return $this->master->put($this->url,$subCategory->getIdsubcategory(),$subCategory,$this->entity);
    }

    public function remove(\Mgd\Entity\Subcategory $subCategory)
    {
        return $this->master->remove($this->url,$subCategory->getIdsubcategory());
    }
}