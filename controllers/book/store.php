<?php

use Core\Validator;
use Core\App;


//connect with the database
$db = App::container('Core\Database');

$errors = [];


//validation
if (!Validator::lenghtValidator($_POST["title"], 2, 255)) {
    $errors["title"] = "Title must be between 2 and 255 characters";
}

if (!Validator::lenghtValidator($_POST["desc"], 10, 1000)) {
    $errors["desc"] = "Description must be between 10 and 1000 characters";
}

//if there are  errors
if (count($errors)) {
    return view('book/create', [
        'page' => 'Create Book',
        'errors' => $errors
    ]);
}



//store the book in the database
$book = $db->execute(
    "INSERT INTO books(title,description,authors_id) VALUES(:title,:desc,:authors_id)",
    [
        ':title' => $_POST['title'],
        ':desc' => $_POST['desc'],
        'authors_id' => 4
    ]
);

//redirect to the books page
header('Location: /books');
die();
