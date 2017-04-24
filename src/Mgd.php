<?php

namespace Mgd;

class Mgd {
    const TOKEN_ENDPOINT = '/oauth/v2/token';
    const MOTHER_ROAD = 'firms/';

    private $oauthRoot;
    private $apiRoot;

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    public $client;
    /**
     * @var \Mgd\Entity\User $user
     */
    public $user;
    private $refresh_token;
    private $parser;
    private $serializer;
    private $client_id;
    private $client_secret;
    private $callback;

    public function __construct($client_id,$client_secret,$callback,$oauthRoot) {
        $this->oauthRoot = $oauthRoot;
        $this->apiRoot = $oauthRoot.'/v1/';
        $this->client_id = $client_id;
        $this->client_secret=$client_secret;
        $this->callback = $callback;

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
        $this->api_user = new \Mgd\Route\User($this);


        $this->parser = new Parser();
        $this->serializer = new Serializer();
    }

    public function login()
    {
        return $this->oauthRoot.'/oauth/v2/auth?client_id='.$this->client_id.'&redirect_uri='.$this->callback.'&response_type=code';
    }

    public function access($code)
    {
        $this->client = new \OAuth2\Client($this->client_id,$this->client_secret);
        $response = $this->client->getAccessToken($this->oauthRoot.self::TOKEN_ENDPOINT, 'authorization_code',array('code'=>$code,"redirect_uri" => $this->callback));
        $this->client->setAccessToken($response['result']['access_token']);
        $this->refresh_token = $response['result']['refresh_token'];
        $this->me();
    }

    public function me()
    {
        $response = $this->client->fetch($this->apiRoot.'me');
        $this->user = $this->parser->parse($response['result'],\Mgd\Entity\User::class);
    }

    public function getAll($url, $entityClass ,$params=array()) {
        $response = $this->client->fetch($this->apiRoot .self::MOTHER_ROAD.$this->user->getFirm()->getIdFirm(). $url . '.json',$params);
        if(self::getError($response))
            return self::getAll($url, $entityClass ,$params);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function get($url, $id, $entityClass) {
        $response = $this->client->fetch($this->apiRoot .self::MOTHER_ROAD.$this->user->getFirm()->getIdFirm(). $url .'/'.$id. '.json');
        if(self::getError($response))
            return self::get($url, $id, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function post($url, $object, $entityClass) {
        $response = $this->client->fetch($this->apiRoot.self::MOTHER_ROAD.$this->user->getFirm()->getIdFirm() . $url . '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_POST,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::post($url, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function put($url, $id, $object, $entityClass) {
        $response = $this->client->fetch($this->apiRoot .self::MOTHER_ROAD.$this->user->getFirm()->getIdFirm(). $url .'/'.$id. '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_PUT,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::put($url, $id, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass);
    }

    public function remove($url, $id) {
        $response = $this->client->fetch($this->apiRoot.self::MOTHER_ROAD.$this->user->getFirm()->getIdFirm() . $url .'/'.$id. '.json',array(),\OAuth2\Client::HTTP_METHOD_DELETE);
        if(self::getError($response))
            return self::remove($url, $id);
        return $response;
    }

    public function getError($response)
    {
        // Gestion de l'accessToken expired
        if($response['code'] == 401 && $response['result']['error'] == "invalid_grant" && $response['result']['error_description'] == "The access token provided has expired.")
        {
            $response = $this->client->getAccessToken($this->oauthRoot.self::TOKEN_ENDPOINT, 'refresh_token',array('refresh_token'=>$this->refresh_token));
            $this->client->setAccessToken($response['result']['access_token']);
            $this->refresh_token = $response['result']['refresh_token'];
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