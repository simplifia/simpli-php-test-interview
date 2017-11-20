<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

$request_uri=strtolower (parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
switch ($request_uri) {
    case "/my-work":
	require 'controllers/table.php';
        $controller = new Table_Controller();
	$table = $controller->superTable();
	break;
    default :
        echo "404 Not found";
        break;
}
?>