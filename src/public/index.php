<?php

require '../vendor/autoload.php';
require '../app/config.php';

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

require_once '../app/app.php';

// Run app
$app->run();

