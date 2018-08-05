<?php

function connectToDb(){
    try{
        return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
    }catch(PDOException $e){
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo){
    $statement = $pdo->prepare('Select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}