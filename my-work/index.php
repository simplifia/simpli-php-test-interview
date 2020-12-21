<?php

require '../config.php';
require 'core/core.php';
require 'core/Controller.php';
require 'core/Model.php';

// get controller and action name
$webRoot = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
$request = str_replace($webRoot, '', $_SERVER['REDIRECT_URL']);
$request = explode('/', $request);

$controller = $request[0] !== '' ? $request[0] : 'rawdata';
$action = isset($request[1]) && $request[1] !== '' ? $request[1] : 'table';

define('WEB_ROOT', $webRoot);

// change controller name for a name expected like -> NameController
$controller = ucfirst(strtolower($controller)) . 'Controller';

$requestController = new $controller();

// call controller's action
if (method_exists($requestController, $action)) {
    $requestController->$action();
} else {
    echo 'Error 404 - Method not found';
}
