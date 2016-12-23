<?php

require_once "Mgd/Suppliers.php";
require_once 'OAuth2/Client.php';
require_once 'OAuth2/GrantType/IGrantType.php';
require_once 'OAuth2/GrantType/AuthorizationCode.php';

class Mgd {
    const AUTHORIZATION_ENDPOINT = 'https://api.monsieurgourmand.com/oauth/v2/auth';
    const TOKEN_ENDPOINT         = 'https://api.monsieurgourmand.com/oauth/v2/token';

    public $root = 'https://api.monsieurgourmand.com/cantine/fourneaux';

    public function __construct($clientId,$clientSecret,$redirectUri) {
        if(!$clientId) throw new Error('You must provide a clientId');
        if(!$clientSecret) throw new Error('You must provide a clientSecret');
        if(!$redirectUri) throw new Error('You must provide a redirectUri');

        $client = new OAuth2\Client($clientId,$clientSecret);
        if (!isset($_GET['code']))
        {
            $auth_url = $client->getAuthenticationUrl(AUTHORIZATION_ENDPOINT, $redirectUri);
            header('Location: ' . $auth_url);
            die('Redirect');
        }
        else
        {
            $params = array('code' => $_GET['code'], 'redirect_uri' => $redirectUri);
            $response = $client->getAccessToken(TOKEN_ENDPOINT, 'authorization_code', $params);
            parse_str($response['result'], $info);
            dump($info);exit;
        }

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