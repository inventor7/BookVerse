<?php

namespace Core;

class Router
{

    //routes will be populated from routes.php
    public $routes = [];

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                return require path($route['controller']);
                exit();
            }
        }
        $this->abort();
    }



    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }


    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }


    public function put($uri, $controller)
    {
        $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
    }


    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
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
