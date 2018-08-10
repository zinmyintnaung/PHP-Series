<?php

$router->get('PHP-Series/Series-1/06-insert', 'controllers/index.php');
$router->get('PHP-Series/Series-1/06-insert/index.php/about', 'controllers/about.php');
$router->get('PHP-Series/Series-1/06-insert/index.php/about/culture', 'controllers/about-culture.php');
$router->get('PHP-Series/Series-1/06-insert/index.php/contact', 'controllers/contact.php');
$router->get('PHP-Series/Series-1/06-insert/index.php/public/css/style.css', 'public/css/style.css');
$router->post('PHP-Series/Series-1/06-insert/index.php/names', 'controllers/add-name.php');

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