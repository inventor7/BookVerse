<?php
//vars
$page = 'Book';
$currentUserId = 4;

//connect with the database
$config = require 'config.php';
$db = new Database($config['database']);


//Queries

$sql = "SELECT * from books where id = :id ";
$book = $db->execute($sql, ['id' => $_GET["id"]])->fetch();

if (!$book) {
    abort(404);
} 
elseif($book["authors_id"] !== $currentUserId) {
    abort(403);
}

require './views/book.view.php';
