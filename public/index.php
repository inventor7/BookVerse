<?php

use Core\Session;
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'core/functions.php';

//require the composer autoloader
require BASE_PATH . 'vendor/autoload.php';

require path('boot.php');
$router = new Core\Router();
require path('routes.php');

//start the session
session_start();



// this is to get the url without the query string
$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

// the _method is used to override the request method in the form , it's input type hidden nd it's value is the method you want to use
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];



//action !!
$router->route($uri, $method);

//unset the flash session
Session::unflash();

