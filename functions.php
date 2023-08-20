<?php
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
   require "views/errors/{$code}.views.php";
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
