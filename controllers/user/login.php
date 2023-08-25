<?php 

use Core\App;
use Core\Validator;


if($_SERVER["REQUEST_METHOD"] === 'POST')
{
    //connect to db
   $db = App::container('Core\Database');

    //get data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    //vars
    $errors = [];

    

    //validate data
    if(!Validator::lenghtValidator($email,13,255))
    {
        $errors['email'] = "Email has to be between 13 and 255 characters";
        return view('user/login', [
            'page' => 'Login',
            'errors' => $errors
        ]);
    }


    if(!Validator::lenghtValidator($password,6,20))
    {
        $errors['password'] = "Password has to be between 6 and 20 characters";
        return view('user/login', [
            'page' => 'Login',
            'errors' => $errors
        ]);
    }

   

    //check if the user exists
        $user = $db->findUserByEmail($email);

        if($user && password_verify($password, $user['password'])) //if the user exists and the password is correct
        {
            //Start the session 
            login($user);

            //redirect to home page
            header('Location: /');
        }
        else //if the user does not exist or the password is incorrect
        {
            $errors['password'] = "Email or password is incorrect";
            return view('user/login', [
                'page' => 'Login',
                'errors' => $errors
        ]);
        }
    
}





//require the login page
view('/user/login');

?>