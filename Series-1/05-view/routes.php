<?php

$router->define([
    'PHP-Series/Series-1/05-view' => 'controllers/index.php',
    'PHP-Series/Series-1/05-view/index.php/about'=> 'controllers/about.php',
    'PHP-Series/Series-1/05-view/index.php/about/culture' => 'controllers/about-culture.php',
    'PHP-Series/Series-1/05-view/index.php/contact' => 'controllers/contact.php'
]);

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