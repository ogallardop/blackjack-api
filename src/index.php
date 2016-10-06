<?php

require 'vendor/autoload.php';

// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

// Current date
$app->get('/date', function ($request, $response, $args) {
    
    $current_date = [];
    $current_date['current_date'] = date("Y-m-d H:i:s");
    $current_date['timezone'] = date_default_timezone_get();
    
    return $response->withJson($current_date, 201);
});

// Run app
$app->run();

