<?php

include_once 'routers/router.config.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'controllers/henri.ctrler');
$router->get('/henri/my-work', 'controllers/henri.ctrler');