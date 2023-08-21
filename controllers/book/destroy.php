<?php

use Core\Database;
use Core\Response;

$currentUserId = 5;

//connect with the database
$config = require path('config.php');
$db = new Database($config['database']);

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
