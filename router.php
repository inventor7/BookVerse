<?php 
$currentUrl = parse_url($_SERVER['REQUEST_URI'])["path"];


$routes = [
    "{$homeUrl}/" => "controllers/home.php",
    "{$homeUrl}/about" => "controllers/about.php",
    "{$homeUrl}/books" => "controllers/books.php",
    "{$homeUrl}/authors" => "controllers/authors.php",
    "{$homeUrl}/book" => "controllers/book.php",
];

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

function abort($code)
{
    http_response_code($code);
    require "views/errors/{$code}.views.php";
    die();

}



