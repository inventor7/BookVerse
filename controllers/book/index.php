<?php

use Core\Database;


//connect with the database
$config = require path('config.php');
$db = new Database($config['database']);


//Queries

$sql = "SELECT * from books where authors_id = :id ";
$results = $db->execute($sql, ['id' => 4])->findAll();
?>

<!-- End main -->

<?php


view('/book/index', [
    'page' => 'Books',
    'results' => $results
]);
?>