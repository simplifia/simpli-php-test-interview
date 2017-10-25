<?php
include 'routers/router.config.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'controllers/henri.ctrler');
$router->get('henri', 'controllers/henri.ctrler');