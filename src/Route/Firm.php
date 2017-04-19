<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace Mgd\Route;


class Firm
{
    /** @var string */
    protected $url = "firms";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Contact::class;
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

    public function post(\Mgd\Entity\Contact $contact)
    {
        return $this->master->post($this->url,$contact,$this->entity);
    }

    public function put(\Mgd\Entity\Contact $contact)
    {
        return $this->master->put($this->url,$contact->getIdcontact(),$contact,$this->entity);
    }

    public function remove(\Mgd\Entity\Contact $contact)
    {
        return $this->master->remove($this->url,$contact->getIdcontact());
    }
}