<?php 

use Core\App;


//conncet to db
$db = App::container('Core\Database');

//get all authors
$authors = $db->execute('SELECT * FROM authors',[])->findAll();


view('authors',
 [
    'page' => 'Authors',
    'authors' => $authors
]);