<?php

namespace Core;

use Core\Middlewares\Auth;
use Core\Middlewares\Guest;
use Core\Middlewares\Middleware;

class Router
{

    //routes will be populated from routes.r
    //$routes = [
    // [
    //    'uri' => 'home', 
    //    'controller' => 'HomeController@index', 
    //    'method' => 'GET' , 
    //    'middleware' => 'auth'
    // ],
    
    public $routes = [];


    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {

            if(isset($route['middleware']))
            {
                Middleware::resolve($route['middleware']);
            }
            return require path('Http/controllers/'.$route['controller']);
            exit();

            }
        }
        $this->abort();
    }


    public function middleware($middleware)
    {
        $this->routes[count($this->routes) - 1]['middleware'] = $middleware;

    }



    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
        return $this;
    }


    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
        return $this;
    }


    public function put($uri, $controller)
    {
        $this->add($uri, $controller, 'PUT');
        return $this;
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
        return $this;
    }


    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
        return $this;
    }



    //helper methods
    public function add($uri, $controller, $method)
    {
        $this->routes[] = [

            'uri' => $uri,
            'controller' => $controller,
            'method' => $method

        ];
    }

    public function abort()
    {
        http_response_code(404);
        require path("views/errors/404.view.php");
        die();
    }
}