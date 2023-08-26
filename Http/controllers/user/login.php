<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;



//get data from the form
$email = $_POST['email'];
$password = $_POST['password'];

//validate data
$form = new LoginForm();
if ($form->validate($email, $password)) //if the form is valid
{
    if ((new Authenticator())->attempt($email, $password)) { //and the the user attempt auth

        redirect('/');
    } else {
        $form->addErrors('email', 'No matching account found for that email and password');
    }
}


//passing the data to session
Session::flash('errors',$form->getErrors());
Session::flash('old',[
    'email' => $email
]);

//redirect
redirect('/user/login');
