<?php 

namespace Core\Middlewares;

class Guest {


    public function handle()
    {
        if(isset($_SESSION['isLoggedin']))
        {
            header('Location: /'); 
        }
    }
}