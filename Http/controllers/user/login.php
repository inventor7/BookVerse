<?php 

use Core\App;
use Core\Validator;
use Http\Forms\LoginForm;


if($_SERVER["REQUEST_METHOD"] === 'POST')
{
    //connect to db
   $db = App::container('Core\Database');

    //get data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    //validate data

    $form = new LoginForm();
    if(!$form->validate($email, $password)) //if the form is not valid
    {
        return view('user/login', [
            'page' => 'Login',
            'errors' => $form->getErrors()
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