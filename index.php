<?php

require './vendor/autoload.php';
require './core/bootstrap.php';

if (ENV == 'DEV') {
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
}

use Core\Router;
use Core\Request;

Router::load('./app/routes.php')->direct(Request::url(), Request::method());
