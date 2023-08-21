<?php

use Core\Response;
use Core\App;

//var
$currentUserId = 4;


//connect with the database
$db = App::container('Core\Database');


//query
$book = $db->execute(
    'SELECT * from books where id = :id',
    ['id' => $_GET["id"]]
)->findOrFail();



//authorize
authorize($currentUserId === 4, Response::FORBIDDEN);


//pass data to the view
view('book/show', [
    'page' => 'Book',
    'book' => $book
]);
