<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../vendor/autoload.php";

const CLIENT_ID = "2_42f7qv8bgxusw44cs0804cco40sow8koc0csk00sk4skco8g8o";
const CLIENT_SECRET = "4fwdlyuen7k00ook8g4gccsc0kk0oo4k4kc0sg4s4wwg4wwcco";
const APIKEY = "sandbox_c2FuZGJveF83YzhkYzZiNmJmZDg5ZTRmZjI5NzUxZDk4YzM4MWEwYQ";
//const APIKEY = "prod_cHJvZF83YzhkYzZiNmJmZDg5ZTRmZjI5NzUxZDk4YzM4MWEwYQ";

$mgd = new \Mgd\Mgd(CLIENT_ID,CLIENT_SECRET,APIKEY);

$zone = $mgd->zone->get(5);
$suppression = $mgd->zone->remove($zone);
dump($suppression);
$zones = $mgd->zone->getAll();
dump($zones);