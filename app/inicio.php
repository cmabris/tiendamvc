<?php

ini_set('display_errors', 1);

// Constantes iniciales
define('ROOT', DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('URL', '/var/www/tiendamvc/');
define('VIEWS', URL . APP . 'views/');
define('ENCRIPTKEY', 'elperrodesanroque');

// Carga las clases iniciales
require_once('libs/Mysqldb.php');
require_once('libs/Controller.php');
require_once('libs/Application.php');
require_once ('libs/Session.php');
require_once('libs/Validate.php');