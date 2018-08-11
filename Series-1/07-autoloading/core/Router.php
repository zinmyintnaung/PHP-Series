<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    

    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType]))
        {
            return $this->routes[$requestType][$uri]; //this will return value of the found key
        }

        throw new Exception('No route define for this URI --> '.$uri);
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

}