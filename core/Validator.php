<?php

namespace Core;

class Validator
{

    public static function  lenghtValidator($field, $min, $max)
    { //default value for $min is 1 and $max is infinity
        trim($field);
        return strlen($field) >= $min && strlen($field) <= $max;
    }


    public static function emailValidator($email)
    {
        trim($email);
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
