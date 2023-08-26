<?php 

//require the login page

use Core\Session;

view('/user/login',[
    'errors' => Session::get('errors')
]);

?>