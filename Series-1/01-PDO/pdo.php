<?php


try{
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
}catch(PDOException $e){
    die('Connection failed, try again!');
}

