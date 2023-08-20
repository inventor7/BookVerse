<?php 
$currentUrl = parse_url($_SERVER['REQUEST_URI'])["path"];
$routes = require path('routes.php');


router($currentUrl,$routes);

function router ($currentUrl,$routes)
{
    if(array_key_exists($currentUrl,$routes))
    {
        require $routes["$currentUrl"];
    } else {
        abort(404);
    }
}




