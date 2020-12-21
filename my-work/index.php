<?php

require '../config.php';
require 'core/core.php';

// get controller and action name
$webRoot = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
$request = str_replace($webRoot, '', $_SERVER['REDIRECT_URL']);
$request = explode('/', $request);

$controller = $request[0] !== '' ? $request[0] : 'rawdata';
$action = isset($request[1]) && $request[1] !== '' ? $request[1] : 'table';

define('WEB_ROOT', $webRoot);

p($controller);
p($action);
d(WEB_ROOT);
