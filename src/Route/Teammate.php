<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:01 PM
 */

namespace Mgd\Route;


class Teammate
{
    /** @var string */
    protected $url = "teammates";

    /** @var  string */
    protected $mail;

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Teammate::class;
    }

    public function getAll()
    {
        $params = array();
        if($this->mail) $params['mail'] = $this->mail;
        return $this->master->getAll($this->url, $this->entity,$params);
    }

    public function get($id)
    {
        return $this->master->get($this->url,$id,$this->entity);
    }

    public function post(\Mgd\Entity\Teammate $teammate)
    {
        return $this->master->post($this->url,$teammate,$this->entity);
    }

    public function put(\Mgd\Entity\Teammate $teammate)
    {
        return $this->master->put($this->url,$teammate->getIdteammate(),$teammate,$this->entity);
    }

    public function remove(\Mgd\Entity\Teammate $teammate)
    {
        return $this->master->remove($this->url,$teammate->getIdteammate());
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}