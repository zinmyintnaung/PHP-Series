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
            //return $this->routes[$requestType][$uri]; //this will return value of the found key
            
            //die($this->routes[$requestType][$uri]); //PagesController@home
            //... is a splat operator in php
            $param = explode('@', $this->routes[$requestType][$uri]);
            return $this->callAction($param[0], $param[1]); 
        }

        throw new Exception('No route define for this URI --> '.$uri);
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
        //print_r($this->routes);
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    protected function callAction($controller, $action)
    {
        $controller = new $controller;

        if(!method_exists($controller, $action)){
            throw new Exception("{$controller} does not respond to the {$action} action");
        }
        return $controller->$action();
    }
}