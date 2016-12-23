<?php

require_once "OAuth2/Apikey.php";
require_once "Mgd/Suppliers.php";


class Mgd {
    const PROD_TOKEN_ENDPOINT = '/oauth/v2/token';
    const SANDBOX_TOKEN_ENDPOINT = '/oauth/v2/token';
    const PROD_ROOT = 'https://api.monsieurgourmand.com';
    const SANDBOX_ROOT = 'http://api.monsieurgourmand.dev/app_dev.php';

    public $accessToken;
    public $refreshToken;
    public $apiUrl;
    public $sandbox;
    public $client;

    public function __construct($clientId,$clientSecret,$apiKey,$sandbox=false) {
        if(!$clientId) throw new Error('You must provide a clientId');
        if(!$clientSecret) throw new Error('You must provide a clientSecret');
        if(!$apiKey) throw new Error('You must provide an apiKey');

        // Gestion de la sandbox
        $this->sandbox = $sandbox;
        if($sandbox)
        {
            $tokenUrl = self::SANDBOX_ROOT.self::SANDBOX_TOKEN_ENDPOINT;
            $this->apiUrl = self::SANDBOX_ROOT."/cantine/";
        }
        else
        {
            $tokenUrl = self::PROD_ROOT.self::PROD_TOKEN_ENDPOINT;
            $this->apiUrl = self::PROD_ROOT."/cantine/";            
        }

        // Gestion de la récupération des crédentials
        $client = new OAuth2\Client($clientId,$clientSecret);
        $params = array('apikey' => $apiKey);
        $response = $client->getAccessToken($tokenUrl, 'apikey', $params);
        if(floor($response['code'] / 100) >= 4) {
            throw new Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        $client->setAccessToken($response['result']['access_token']);
        $this->client = $client;

        $this->suppliers = new Mgd_Suppliers($this);
    }

    public function getAll($url, $params=array()) {
        $response = $this->client->fetch($this->apiUrl . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return $response->body;
    }
}