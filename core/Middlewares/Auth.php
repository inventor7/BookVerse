<?php 

namespace Core\Middlewares;

class Auth {
    public function handle()
    {
        if(!isset($_SESSION['isLoggedin']))
        {
            header('Location: /user/login');
        }
    }
}