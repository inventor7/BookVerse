<?php 
function navigationStyle ($url){
$currentUrl =  $_SERVER['REQUEST_URI'] ;
 if($url === $currentUrl)
 {
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