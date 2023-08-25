<?php

use Core\Response;
use Core\App;

//connect with the database
$db = App::container('Core\Database');

$currentUserId = 4;


//authorize
$sql = "SELECT * FROM books WHERE id = :id";
$book = $db->execute($sql, ['id' => $_POST["id"]])->findOrFail();
authorize($book["authors_id"] === $currentUserId, Response::FORBIDDEN);

//query
$sql = "DELETE FROM books WHERE id = :id";
$db->execute($sql, ['id' => $_POST["id"]]);

//redorect
header('Location: /books');
exit();
