<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();

$container->bind('Core\Database', function () {
    $config = require path('config.php');
    return new Database($config['database']);
});

// save the container in the app class
App::setContainer($container);


