<?php
//vars
$page = 'Book Creation';

//connect with the database
$config = require 'config.php';
$db = new Database($config['database']);


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if (strlen($_POST['title']) === 0) {
        $errors['title'] = 'a title is required';
    } 
    if (strlen($_POST['desc']) ==0) {
        $errors['desc'] = 'a description is required';
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



require './views/book-create.view.php';
