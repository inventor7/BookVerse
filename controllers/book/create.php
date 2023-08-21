<?php

use Core\Database;
use Core\Validator;


//connect with the database
$config = require path('config.php');
$db = new Database($config['database']);
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    if (!Validator::lenghtValidator($_POST["title"], 2, 255)) {
        $errors["title"] = "Title must be between 2 and 255 characters";
    }

    if (!Validator::lenghtValidator($_POST["desc"], 10, 1000)) {
        $errors["desc"] = "Description must be between 10 and 1000 characters";
    }

    if (empty($errors)) {
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


//pass data to the view
view('book/create', [
    'page' => 'Create Book',
    'errors' => $errors
]);
