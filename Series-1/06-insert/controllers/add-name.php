<?php

$app['database']->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /PHP-Series/Series-1/06-insert');