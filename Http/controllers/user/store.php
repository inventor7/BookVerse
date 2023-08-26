<?php

use Core\App;
use Core\Validator;

//vars
$errors = [];

//connect to db
$db = App::container('Core\Database');

//get data from the form
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];


//validate data

//isEmpty
if(!Validator::lenghtValidator($email,13,255))
{
    $errors['email'] = "Email is required";
    return view('user/create', [
        'page' => 'Create User',
        'errors' => $errors
    ]);
}



if(!Validator::lenghtValidator($password,6,20))
{
    $errors['password'] = "Password must be between 6 and 20 characters";
    
    return view('user/create', [
        'page' => 'Create User',
        'errors' => $errors
    ]);
}

if(!Validator::lenghtValidator($password,6,20))
{
    $errors['password'] = "Password must be between 6 and 20 characters";
    return view('user/create', [
        'page' => 'Create User',
        'errors' => $errors
    ]);
}





if($password !== $confirmPassword)
{
    $errors['confirm-password'] = "Confirlation Password does not match the password";
    return view('user/create', [
        'page' => 'Create User',
        'errors' => $errors
    ]);
}



//isValid
if(!Validator::emailValidator($email))
{
    $errors['email'] = "Please include a valid email address so we can get back to you";
    return view('user/create', [
        'page' => 'Create User',
        'errors' => $errors
    ]);
}

//isUnique
if($db->isUnique('users','email',$email))
{
    $errors['email'] = "This email is already taken try "."Signin";
    return view('user/create', [
        'page' => 'Create User',
        'errors' => $errors
    ]);
}


//store data in db
$db->execute("INSERT INTO users (email,password) VALUES (:email,:password)",[
    'email' => $email,
    'password' => password_hash($password,PASSWORD_DEFAULT)
]);


//create session
$_SESSION['email'] = $email;
$_SESSION['isLoggedin'] = true;



//redirect to index page or error page
header('location:/');
die();