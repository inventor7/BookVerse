<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{

    protected $errors = [];


    public function validate($email, $password)
    {
        // $this->validateEmail();
        // $this->validatePassword();

        if (!Validator::lenghtValidator($password, 6, 20)) {
            $this->errors['password'] = "Password has to be between 6 and 20 characters";
        }

        if (!Validator::emailValidator($email)) {
            $this->errors['email'] = "Please include a valid email address";
        }

        return empty($this->errors);
    }

    //getters

    public function getErrors()
    {
        return $this->errors;
    }
}
