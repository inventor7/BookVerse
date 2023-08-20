<?php
//vars
$page = 'Book Creation';

//require
require 'Validator.php';

//connect with the database
$config = require 'config.php';
$db = new Database($config['database']);


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if(!Validator::lenghtValidator($_POST["title"],2,255))
    {
        $errors["title"] = "Title must be between 2 and 255 characters";
    }
    
    if(!Validator::lenghtValidator($_POST["desc"],10,1000))
    {
        $errors["desc"] = "Description must be between 10 and 1000 characters";
    }


    if (!isset($errors)) {
        $sql = "INSERT INTO books(title,description,authors_id) VALUES(:title,:desc,:authors_id)";
        $book = $db->execute(
            $sql,
            [
                ':title' => $_POST['title'],
                ':desc' => $_POST['desc'],
                'authors_id' => 4
            ]
        );
    }
}



require './views/book/create.view.php';
