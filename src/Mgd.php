<?php

namespace Mgd;

class Mgd {
    const TOKEN_ENDPOINT = '/oauth/v2/token';
    const MOTHER_ROAD = 'groups/';

    private $oauthRoot;
    private $apiRoot;

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    public $client;
    /**
     * @var \Mgd\Entity\User $user
     */
    public $me;
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
        $this->customer = new \Mgd\Route\Customer($this);
        $this->operation = new \Mgd\Route\Operation($this);
        $this->product = new \Mgd\Route\Product($this);
        $this->purchase = new \Mgd\Route\Purchase($this);
        $this->sale = new \Mgd\Route\Sale($this);
        $this->supplier = new \Mgd\Route\Supplier($this);
        $this->user = new \Mgd\Route\User($this);
        $this->zone = new \Mgd\Route\Zone($this);


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
        $this->me = $this->parser->parse($response['result'],\Mgd\Entity\User::class,$this);
    }

    public function getAll($url, $entityClass ,$params=array()) {
        $response = $this->client->fetch($this->apiRoot .self::MOTHER_ROAD.$this->me->getFirm()->getIdFirm(). $url . '.json',$params);
        if(self::getError($response))
            return self::getAll($url, $entityClass ,$params);
        return $this->parser->parse($response['result'],$entityClass,$this);
    }

    public function get($url, $id, $entityClass) {
        if($id != null)
            $response = $this->client->fetch($this->apiRoot .self::MOTHER_ROAD.$this->me->getFirm()->getIdFirm(). $url .'/'.$id. '.json');
        else
            $response = $this->client->fetch($this->apiRoot .self::MOTHER_ROAD.$this->me->getFirm()->getIdFirm(). $url. '.json');
        if(self::getError($response))
            return self::get($url, $id, $entityClass);
        return $this->parser->parse($response['result'],$entityClass,$this);
    }

    public function post($url, $object, $entityClass) {
        $response = $this->client->fetch($this->apiRoot.self::MOTHER_ROAD.$this->me->getFirm()->getIdFirm() . $url . '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_POST,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::post($url, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass,$this);
    }

    public function put($url, $id, $object, $entityClass) {
        $response = $this->client->fetch($this->apiRoot .self::MOTHER_ROAD.$this->me->getFirm()->getIdFirm(). $url .'/'.$id. '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_PUT,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::put($url, $id, $object, $entityClass);
        return $this->parser->parse($response['result'],$entityClass,$this);
    }

    public function remove($url, $id) {
        $response = $this->client->fetch($this->apiRoot.self::MOTHER_ROAD.$this->me->getFirm()->getIdFirm() . $url .'/'.$id. '.json',array(),\OAuth2\Client::HTTP_METHOD_DELETE);
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
            throw new \Error("[".$response['code']."] ".$response['result']['error']['message']);
        }
        if(floor($response['code'] / 100) > 4) {
            throw new \Error("[".$response['code']."] ".$response['result']['error']['exception'][0]['message']);
        }
    }
}