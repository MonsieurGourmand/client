<?php

namespace Mgd;

class Mgd {
    const TOKEN_ENDPOINT = '/oauth/v2/token';
    const GROUPS_ROAD = 'groups/';

    private $oauthRoot;
    private $apiRoot;

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    const FORMAT_OBJECT = "object";
    const FORMAT_JSON = "json";
    const FORMAT_PDF = "pdf";

    /** @var \OAuth2\Client */
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
        $this->stat = new \Mgd\Route\Stat($this);


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

    public function accessClientCredential()
    {
        $this->client = new \OAuth2\Client($this->client_id,$this->client_secret);
        $response = $this->client->getAccessToken($this->oauthRoot.self::TOKEN_ENDPOINT, 'client_credentials',array());
        $this->client->setAccessToken($response['result']['access_token']);
    }

    public function me()
    {
        $response = $this->client->fetch($this->apiRoot.'me');
        $this->me = $this->parser->parse($response['result'],\Mgd\Entity\User::class,$this,self::FORMAT_OBJECT);
    }

    public function getAll($url, $entityClass ,$params=array(),$format) {
        $response = $this->client->fetch($this->apiRoot . $url . '.json',$params);
        if(self::getError($response))
            return self::getAll($url, $entityClass ,$params,$format);
        if($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'],$entityClass,$this,$format);
        elseif($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function get($url, $id, $entityClass,$format) {
        $format == self::FORMAT_PDF ? $dot = ".pdf" : $dot = ".json";
        if($id != null)
            $response = $this->client->fetch($this->apiRoot . $url .'/'.$id. $dot);
        else
            $response = $this->client->fetch($this->apiRoot . $url. $dot);
        if(self::getError($response))
            return self::get($url, $id, $entityClass,$format);
        if($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'],$entityClass,$this,$format);
        elseif($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];
    }

    public function post($url, $object, $entityClass,$format) {
        $response = $this->client->fetch($this->apiRoot. $url . '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_POST,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::post($url, $object, $entityClass,$format);
        if($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'],$entityClass,$this,$format);
        elseif($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];    }

    public function put($url, $id, $object, $entityClass,$format) {
        $response = $this->client->fetch($this->apiRoot . $url .'/'.$id. '.json',$this->serializer->serialize($object),\OAuth2\Client::HTTP_METHOD_PUT,array('Content-Type' => 'application/x-www-form-urlencoded'),\OAuth2\Client::HTTP_FORM_CONTENT_TYPE_APPLICATION);
        if(self::getError($response))
            return self::put($url, $id, $object, $entityClass,$format);
        if($format == self::FORMAT_OBJECT)
            return $this->parser->parse($response['result'],$entityClass,$this,$format);
        elseif($format == self::FORMAT_JSON)
            return json_encode($response['result']);
        else
            return $response['result'];    }

    public function remove($url, $id) {
        $response = $this->client->fetch($this->apiRoot. $url .'/'.$id. '.json',array(),\OAuth2\Client::HTTP_METHOD_DELETE);
        if(self::getError($response))
            return self::remove($url, $id);
        return $response;
    }

    public function getError($response)
    {
        // Gestion de l'accessToken expired
        if($response['code'] == 401 && $response['result']['error'] == "invalid_grant" && $response['result']['error_description'] == "The access token provided has expired.")
        {
            if($this->refresh_token != null)
            {
                $response = $this->client->getAccessToken($this->oauthRoot.self::TOKEN_ENDPOINT, 'refresh_token',array('refresh_token'=>$this->refresh_token));
                $this->client->setAccessToken($response['result']['access_token']);
                $this->refresh_token = $response['result']['refresh_token'];
                return true;
            }
            else
            {
                $this->accessClientCredential();
                return true;
            }
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