<?php

// $app = [];

// $app['config'] = require 'config.php';

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );

// Instead of storing config and DB in app array, we can use App class to inject those dependencies

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
        Connection::make(App::get('config')['database'])
));

function view($name, $data)
{
        extract($data);
        return require "views/{$name}.view.php";
}