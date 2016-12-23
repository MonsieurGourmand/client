<?php

require_once "Mgd/Suppliers.php";

class Mgd {
    
    public $accessToken;
    public $root = 'https://api.monsieurgourmand.com/cantine/fourneaux';

    public function __construct($accessToken) {
        if(!$apiKey) throw new Error('You must provide an apiKey');

        $this->accessToken = $accessToken;

        $this->suppliers = new Mgd_Suppliers($this);
    }

    public function getAll($url, $params=array()) {
        $params['access_token'] = $this->accessToken;
        $response = Unirest\Request::get($this->root . $url . '.json',array(),$params);
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return $response->body;
    }
}