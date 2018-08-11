<?php

$router->get('PHP-Series/Series-1/08-namespace', 'PagesController@home');
$router->get('PHP-Series/Series-1/08-namespace/index.php/about', 'PagesController@about');
//print_r($router);die;
$router->get('PHP-Series/Series-1/08-namespace/index.php/contact', 'PagesController@contact');
$router->get('PHP-Series/Series-1/08-namespace/index.php/public/css/style.css', 'public/css/style.css');
$router->post('PHP-Series/Series-1/08-namespace/index.php/names', 'controllers/add-name.php');

/*
On production, you should have clean URI request rather than path to folder under xampp htdocs
Later we can have Apache or Nginx to remove index.php in our URI

$router->define([
    '' => 'controllers/index.php',
    'about'=> 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);

*/