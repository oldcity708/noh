<?php

$extension = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
$domain = $_SERVER['HTTP_HOST'];

$APP_URL = 'https://'.$_SERVER['HTTP_HOST'].'/noh/dist/';
// 本サーバ設置時は下記をコメントオフしてください。
// $APP_URL = 'https://'.$_SERVER['HTTP_HOST'].'';


define('APP_URL', $APP_URL);
define('APP_PATH', dirname(__FILE__).'/');
