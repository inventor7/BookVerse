<?php

namespace Core\Middlewares;

class Middleware
{

    public const  MIDDLEWARES = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];


    public static function resolve($key)
    {
        $middleware =  static::MIDDLEWARES[$key];
        (new $middleware)->handle();
    }
}