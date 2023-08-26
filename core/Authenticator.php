<?php

namespace Core;

use Core\App;
use Core\Session;

class Authenticator
{

    protected $user;
    protected $errors;

    public function __construct()
    {
        if (isset($_SESSION['email'])) {
            $this->user = App::container('Core\Database')->findUserByEmail($_SESSION['email']);
        }
    }


    public function attempt($email, $password)
    {
        $user = (App::container('Core\Database'))->findUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) //if the user exists and the password is correct
        {
            //Start the session 
            $this->login($user);
            return true;
        } else //if the user does not exist or the password is incorrect
        {
            return false;
        }
    }


    public function login($user)
    {
        $_SESSION['email'] = $user['email'];
        $_SESSION['isLoggedin'] = true;

        //regenerate session id
        session_regenerate_id(true);
    }


    public function logout()
    {
        //delete session and logout the user
        Session::destroy();
    }

    //getters 

    public function getErrors()
    {
        return $this->errors;
    }

    public function user()
    {
        return $this->user;
    }
}
