<?php

use Core\Response;

function navigationStyle($url)
{
   $currentUrl =  $_SERVER['REQUEST_URI'];
   if ($url === $currentUrl) {
      return "bg-blue-900/30";
   } else {
      return "";
   }
}

function dd($var)
{
   echo "<pre>";
   var_dump($var);
   echo "</pre>";
   die();
}

function abort($code = Response::NOT_FOUND)
{
   http_response_code($code);
   view("errors/{$code}");
   die();
}


function authorize($state, $code = Response::FORBIDDEN)
{
   if (!$state) {
      abort($code);
   }
}


function path($path)
{
   return BASE_PATH . $path;
}

function view($view, $data = [])
{
   extract($data);
   require path("views/{$view}.view.php");
}




//Auth
function login($user)
{
   $_SESSION['email'] = $user['email'];
   $_SESSION['isLoggedin'] = true;

   //regenerate session id
   session_regenerate_id(true);
   
}

function logout()
{
 //delete session and logout the user
$_Session = [];

//delete session and logout the user with the cookie
session_destroy();

$params = session_get_cookie_params();
setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain']);


}