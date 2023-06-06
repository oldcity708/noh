<?php

$extension = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
$domain = $_SERVER['HTTP_HOST'];

$APP_URL = 'https://'.$_SERVER['HTTP_HOST'].'/furuichi/dist/';

define('APP_URL', $APP_URL);
define('APP_PATH', dirname(__FILE__).'/');
