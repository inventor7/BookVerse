<?php

namespace Core;

//we can use this class to store the container and access it from anywhere
class App 
{

    protected static  $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container($key)
    {
        return static::$container->resolve($key);
    }
}
