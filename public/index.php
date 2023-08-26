<?php

use Core\Session;
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'core/functions.php';

//this is to just call it when you need it not all the time you enter an url 
spl_autoload_register(function ($class) { 
    //Core\Databse or Core\Response or Core\Router
    $class = str_replace('\\', '/', $class);
    require path("{$class}.php");
});

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

