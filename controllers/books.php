<?php
$page = 'books';
$currentUserId = 4;

//connect with the database
$config = require 'config.php';
$db = new Database($config['database']);


//Queries

$sql = "SELECT * from books where authors_id = :id ";
$results = $db->execute($sql, ['id'=>$currentUserId ])->findAll();
?>

<!-- End main -->

<?php require './views/books.view.php'; ?>