<?php
//var
$currentUserId = 4;

//connect with the database
$config = require path('config.php');
$db = new Database($config['database']);


//Queries

$sql = "SELECT * from books where id = :id ";
$book = $db->execute($sql, ['id' => $_GET["id"]])->findOrFail();

authorize($currentUserId===4,Response::FORBIDDEN);

//pass data to the view
view('book/show', [
    'page' => 'Book',
    'book' => $book
]);