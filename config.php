<?php

$INPUT_DATA = serialize(array(1 => 1,3 => 4,10 => 12));
const DEBUG = true; 

const LANG ='FR-fr';

//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
//define('PATH_ENTITY','./entities/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');

//sous dossiers
define('PATH_CSS', PATH_ASSETS.'css/');

//sous dossiers
//define('PATH_CSS', PATH_ASSETS.'css/');
//define('PATH_IMAGES', PATH_ASSETS.'images/');