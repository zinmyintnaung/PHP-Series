<?php

class Router
{
    protected $routes = [];


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        
        
        
        if(array_key_exists($uri, $this->routes))
        {
            return $this->routes[$uri]; //this will return value of the found key
        }

        throw new Exception('No route define for this URI --> '.$uri);
    }
}