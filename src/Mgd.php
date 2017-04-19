<?php

namespace Mgd;

class Mgd {
    const TOKEN_ENDPOINT = '/oauth/v2/token';

    const OAUTHROOT = 'http://api.dev';
    const APIROOT = 'http://api.dev/v1/';

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    public $client;

    private $refresh_token;
    private $parser;
    private $serializer;

    public function __construct($code) {
        $this->client = new \OAuth2\Client('22_3lj8zibuou044ckgogscw84cg0sg4gk0s44wggkgko0ccoccsc','2hidonngzry8wc0gkckcgso8g440s84cgs8g84480gc8cck40');
        $response = $this->client->getAccessToken(self::OAUTHROOT.self::TOKEN_ENDPOINT, 'authorization_code',array('code'=>$code,'redirect_uri'=>'http://boutique.dev/callback'));
        $this->client->setAccessToken($response['result']['access_token']);
        $this->refresh_token = $response['result']['refresh_token'];

        // Entités métiers
        $this->category = new \Mgd\Route\Category($this);
        $this->firm = new \Mgd\Route\Firm($this);
        $this->orderPurchaseProduct = new \Mgd\Route\OrderPurchaseProduct($this);
        $this->orderSaleProduct = new \Mgd\Route\OrderSaleProduct($this);
        $this->purchase = new \Mgd\Route\Purchase($this);
        $this->product = new \Mgd\Route\Product($this);
        $this->sale = new \Mgd\Route\Sale($this);
        $this->stock = new \Mgd\Route\Stock($this);
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
            $response = $this->client->getAccessToken(self::OAUTHROOT.self::TOKEN_ENDPOINT, 'refresh_token',array('refresh_token'=>$this->refresh_token));
            $this->client->setAccessToken($response['result']['access_token']);
            $this->refresh_token = $response['result']['refresh_token'];
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