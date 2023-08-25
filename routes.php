<?php


$router->get('/', 'home.php');
$router->get('/about', 'about.php');
$router->get('/authors', 'authors.php');

//books
$router->get('/books','book/index.php');          //index : list all books
$router->get('/book','book/show.php');            //show  : show a book

$router->delete('/book','book/destroy.php')->middleware('auth');      //destroy: delete a book

$router->get('/book/create','book/create.php')->middleware('auth');  //create  : form to create a book
$router->post('/books','book/store.php')->middleware('auth');          //store   : store a book

$router->get('/book/edit','book/edit.php')->middleware('auth');       //edit   : form to edit a book
$router->patch('/books','book/update.php')->middleware('auth');       //update : update a book   


//users

$router->get('/user/create','user/create.php')->middleware('guest');          //create  : form to create a user
$router->post('/users','user/store.php')->middleware('guest');               //store   : store a user

$router->get('/user/login','user/login.php')->middleware('guest');             //login   : form to login
$router->post('/user/login','user/login.php')->middleware('guest');            //login   : login a user

$router->post('/user/logout','user/logout.php')->middleware('auth');            //logout   : logout a user

