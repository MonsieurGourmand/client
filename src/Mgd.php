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
    public $sandbox;
    public $client;
    public $parser;

    public function __construct($clientId,$clientSecret,$apiKey) {
        if(!$clientId) throw new \Error('You must provide a clientId');
        if(!$clientSecret) throw new \Error('You must provide a clientSecret');
        if(!$apiKey) throw new \Error('You must provide an apiKey');

        $this->parser = new Parser();
        $this->serializer = new Serializer();

        $tokenUrl = self::APIROOT.self::TOKEN_ENDPOINT;
        $this->apiUrl = self::APIROOT."/cantine/";
        // Gestion de la récupération des crédentials
        $client = new \OAuth2\Client($clientId,$clientSecret);
        $params = array('apikey' => $apiKey);
        $response = $client->getAccessToken($tokenUrl, 'apikey', $params);

        if(floor($response['code'] / 100) >= 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        $client->setAccessToken($response['result']['access_token']);
        $this->client = $client;
        // Fin de la gestion des credentials

        $this->category = new \Mgd\Route\Category($this);
        $this->product = new \Mgd\Route\Product($this);
        $this->purchase = new \Mgd\Route\Purchase($this);
        $this->stock = new \Mgd\Route\Stock($this);
        $this->subcategory = new \Mgd\Route\Subcategory($this);
        $this->supplier = new \Mgd\Route\Supplier($this);
        $this->supplierContact = new \Mgd\Route\SupplierContact($this);
        $this->supplierProduct = new \Mgd\Route\SupplierProduct($this);
        $this->teammate = new \Mgd\Route\Teammate($this);
        $this->zone = new \Mgd\Route\Zone($this);
    }

    public function getAll($url, $entityClass ,$params=null) {
        $response = $this->client->fetch($this->apiUrl . $url . '.json');

        if(floor($response['code'] / 100) >= 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        return $this->parser->do($response['result'],$entityClass);
    }

    public function get($url, $id, $entityClass ,$params=null) {
        $response = $this->client->fetch($this->apiUrl . $url .'/'.$id. '.json');

        if(floor($response['code'] / 100) >= 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        return $this->parser->do($response['result'],$entityClass);
    }

    public function post($url, $object) {
        $response = $this->client->fetch($this->apiUrl . $url .'/'.$id. '.json',$this->serializer->do($object),\OAuth2\Client::HTTP_METHOD_POST);

        if(floor($response['code'] / 100) >= 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        return $this->parser->do($response['result'],$entityClass);
    }

    public function put($url, $object, $params=null) {
        $response = $this->client->fetch($this->apiUrl . $url .'/'.$id. '.json',array(),\OAuth2\Client::HTTP_METHOD_PUT);

        if(floor($response['code'] / 100) >= 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        return $this->parser->do($response['result'],$entityClass);
    }

    public function remove($url, $id) {
        $response = $this->client->fetch($this->apiUrl . $url .'/'.$id. '.json',array(),\OAuth2\Client::HTTP_METHOD_DELETE);
        if(floor($response['code'] / 100) >= 4) {
            throw new \Error("[".$response['result']['error']."] ".$response['result']['error_description']);
        }
        return $response;
    }
}