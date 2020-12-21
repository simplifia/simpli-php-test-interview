<?php

require '../config.php';
require 'core/core.php';

// get controller and action name
$webRoot = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
$request = str_replace($webRoot, '', $_SERVER['REDIRECT_URL']);
$request = explode('/', $request);

d($request);
