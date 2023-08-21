<?php 


$router->get('/', 'controllers/home.php');
$router->get('/about', 'controllers/about.php');
$router->get('/authors', 'controllers/authors.php');

//books
$router->get('/books', 'controllers/book/index.php');
$router->get('/book', 'controllers/book/show.php');
$router->delete('/book', 'controllers/book/destroy.php');
$router->get('/book/create', 'controllers/book/create.php');
$router->post('/book/create', 'controllers/book/create.php');

