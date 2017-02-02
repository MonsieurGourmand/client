<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace Mgd\Route;


class User
{
    /** @var string */
    protected $url = "user";

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\OAuth2\User::class;
    }

    public function get()
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity,$params);
    }
}