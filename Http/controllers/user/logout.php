<?php

use Core\Authenticator;

(new Authenticator)->logout();

//redirect to home page
redirect('/');


?>