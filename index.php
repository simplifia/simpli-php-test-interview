<?php
include_once('config.php');
include_once 'routers/router.config.php';


$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'controllers/home.ctrler');
$router->get('/henri', 'controllers/henri.ctrler');
$router->get('/*', 'controllers/error.ctrler');