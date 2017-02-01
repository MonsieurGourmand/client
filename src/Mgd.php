<?php

namespace Mgd;

require_once("OAuth2/Apikey.php");

class Mgd {
    const TOKEN_ENDPOINT = '/oauth/v2/token';
    //const APIROOT = 'https://api.monsieurgourmand.com';
    const APIROOT = 'http://api.monsieurgourmand.dev/app_dev.php';

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    public $apiUrl;

    protected $apiKey;
    protected $clientId;
    protected $clientSecret;

    public $client;
    public $parser;
    public $serializer;

    public function __construct($clientId,$clientSecret,$apiKey) {
        if(!$clientId) throw new \Error('You must provide a clientId');
        if(!$clientSecret) throw new \Error('You must provide a clientSecret');
        if(!$apiKey) throw new \Error('You must provide an apiKey');

        $this->apiKey = $apiKey;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;

        $this->client = new \OAuth2\Client($this->clientId,$this->clientSecret);
        self::getAccessToken();

        $this->category = new \Mgd\Route\Category($this);
        $this->product = new \Mgd\Route\Product($this);
        $this->purchase = new \Mgd\Route\Purchase($this);
        $this->sale = new \Mgd\Route\Sale($this);
        $this->stock = new \Mgd\Route\Stock($this);
        $this->subcategory = new \Mgd\Route\Subcategory($this);
        $this->supplier = new \Mgd\Route\Supplier($this);
        $this->supplierContact = new \Mgd\Route\SupplierContact($this);
        $this->supplierProduct = new \Mgd\Route\SupplierProduct($this);
        $this->teammate = new \Mgd\Route\Teammate($this);
        $this->zone = new \Mgd\Route\Zone($this);

        $this->apiUrl = self::APIROOT."/cantine/";
        $this->parser = new Parser();
        $this->serializer = new Serializer();
    }

    public function getAll($url, $entityClass ,$params=array()) {
        $response = $this->client->fetch($this->apiUrl . $url . '.json',$params);
        if(self::getError($response))
            return self::getAll($url, $entityClass ,$params);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function get($url, $id, $entityClass) {
        $response = $this->client->fetch($this->apiUrl . $url .'/'.$id. '.json');
        if(self::getError($response))
            return self::get($url, $id, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function post($url, $object, $entityClass) {
        $response = $this->client->fetch($this->apiUrl . $url . '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_POST,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::post($url, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function put($url, $id, $object, $entityClass) {
        $response = $this->client->fetch($this->apiUrl . $url .'/'.$id. '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_PUT,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::put($url, $id, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function remove($url, $id) {
        $response = $this->client->fetch($this->apiUrl . $url .'/'.$id. '.json',null,\OAuth2\Client::HTTP_METHOD_DELETE);
        if(self::getError($response))
            return self::remove($url, $id);
        return $response;
    }

    public function getAccessToken()
    {
        $tokenUrl = self::APIROOT.self::TOKEN_ENDPOINT;
        // Gestion de la récupération des crédentials
        $params = array('apikey' => $this->apiKey);
        $response = $this->client->getAccessToken($tokenUrl, 'apikey', $params);

        if(floor($response['code'] / 100) >= 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        $this->client->setAccessToken($response['result']['access_token']);
    }

    public function getError($response)
    {
        // Gestion de l'accessToken expired
        if($response['code'] == 401 && $response['result']['error'] == "invalid_grant" && $response['result']['error_description'] == "The access token provided has expired.")
        {
            self::getAccessToken();
            return true;
        }
        // Gestion de l'accessToken expired
        if(floor($response['code'] / 100) == 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        if(floor($response['code'] / 100) > 4) {
            throw new \Error($response['code']);
        }
    }
}