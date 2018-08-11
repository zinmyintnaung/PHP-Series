<?php

use MyApp\Core\Router;
use MyApp\Core\Request;

require 'vendor/autoload.php';

require 'core/bootstrap.php';

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());