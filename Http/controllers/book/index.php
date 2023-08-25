<?php

use Core\App;

//connect with the database
$db = App::container('Core\Database');


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