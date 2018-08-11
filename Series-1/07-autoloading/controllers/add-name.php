<?php

App::get('database')->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /PHP-Series/Series-1/07-autoloading');