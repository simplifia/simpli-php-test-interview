<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

$request_uri=strtolower (parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
switch ($request_uri) {
    case "/my-work":
	echo '/my-work';
	break;
    default :
        echo "404 Not found";
        break;
}
?>