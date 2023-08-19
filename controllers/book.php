<?php
//vars
$page = 'Book';
$currentUserId = 4;

//connect with the database
$config = require 'config.php';
$db = new Database($config['database']);


//Queries

$sql = "SELECT * from books where id = :id ";
$book = $db->execute($sql, ['id' => $_GET["id"]])->findOrFail();

authorize($currentUserId===4,Response::FORBIDDEN);
require './views/book.view.php';
