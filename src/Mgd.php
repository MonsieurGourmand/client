<?php

namespace Mgd;

class Mgd {
    const TOKEN_ENDPOINT = '/oauth/v2/token';
    //const APIROOT = 'https://api.monsieurgourmand.com';
    const OAUTHROOT = 'http://api.monsieurgourmand.dev/app_dev.php';
    const APIROOT = 'http://api.monsieurgourmand.dev/app_dev.php/v1/';

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    private $passwordClientId = '1_2cf749lbilwkw0gc4kg8kg4g4goo8okcs08kwo0o0gwokwww4c';
    private $passwordClientSecret = '4fbuayr3782s8ggs8kgwgo4w0wkc4wgskg4skg4wksggwgscg4';
    public $user;

    private $apiKeyClientId = '2_42f7qv8bgxusw44cs0804cco40sow8koc0csk00sk4skco8g8o';
    private $apiKeyClientSecret = '4fwdlyuen7k00ook8g4gccsc0kk0oo4k4kc0sg4s4wwg4wwcco';

    public $client;
    protected $prod;
    protected $sandbox;

    private $parser;
    private $serializer;

    public function __construct($username,$password) {
        if(!$username) throw new \Error('You must provide a username');
        if(!$password) throw new \Error('You must provide a password');

        $passwordClient = new \OAuth2\Client($this->passwordClientId,$this->passwordClientSecret);
        $params = array('username' => $username, 'password' => $password);
        $response = $passwordClient->getAccessToken(self::OAUTHROOT.self::TOKEN_ENDPOINT, 'password', $params);
        $passwordClient->setAccessToken($response['result']['access_token']);

        $response = $passwordClient->fetch(self::APIROOT.'user.json');
        $this->user = $response['result'];

        $this->prod = new \OAuth2\Client($this->apiKeyClientId,$this->apiKeyClientSecret);
        $params = array('apikey' => $this->user['prodApiKey']);
        $response = $this->prod->getAccessToken(self::OAUTHROOT.self::TOKEN_ENDPOINT, 'apikey', $params);
        $this->prod->setAccessToken($response['result']['access_token']);

        $this->sandbox = new \OAuth2\Client($this->apiKeyClientId,$this->apiKeyClientSecret);
        $params = array('apikey' => $this->user['sandboxApiKey']);
        $response = $this->sandbox->getAccessToken(self::OAUTHROOT.self::TOKEN_ENDPOINT, 'apikey', $params);
        $this->sandbox->setAccessToken($response['result']['access_token']);

        $this->client = $this->prod;

        // Entités métiers
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

        $this->parser = new Parser();
        $this->serializer = new Serializer();
    }

    public function getAll($url, $entityClass ,$params=array()) {
        $response = $this->client->fetch(self::APIROOT . $url . '.json',$params);
        if(self::getError($response))
            return self::getAll($url, $entityClass ,$params);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function get($url, $id, $entityClass) {
        $response = $this->client->fetch(self::APIROOT . $url .'/'.$id. '.json');
        if(self::getError($response))
            return self::get($url, $id, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function post($url, $object, $entityClass) {
        $response = $this->client->fetch(self::APIROOT . $url . '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_POST,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::post($url, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function put($url, $id, $object, $entityClass) {
        $response = $this->client->fetch(self::APIROOT . $url .'/'.$id. '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_PUT,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::put($url, $id, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function remove($url, $id) {
        $response = $this->client->fetch(self::APIROOT . $url .'/'.$id. '.json',array(),\OAuth2\Client::HTTP_METHOD_DELETE);
        if(self::getError($response))
            return self::remove($url, $id);
        return $response;
    }

    public function setEnv($env)
    {
        if($env == "production")
            $this->client = $this->prod;
        elseif($env == "sandbox")
            $this->client = $this->sandbox;
    }

    public function getAccessToken()
    {
        if($this->client == $this->prod)
            $params = array('apikey' => $this->user['prodApiKey']);
        else
            $params = array('apikey' => $this->user['sandboxApiKey']);

        $response = $this->client->getAccessToken(self::OAUTHROOT.self::TOKEN_ENDPOINT, 'apikey', $params);
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
            throw new \Error("[".$response['code']."] ".$response['result']['error']['exception'][0]['message']);
        }
    }
}