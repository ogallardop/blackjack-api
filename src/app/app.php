<?php

// Start Player connection
$app->post('/user/connect', function ($request, $response, $args) {

    
    return $response->withJson($args, 200);
});

// Current date
$app->get('/date', function ($request, $response, $args) {
    
    $current_date = [];
    $current_date['current_date'] = date("Y-m-d H:i:s");
    $current_date['timezone'] = date_default_timezone_get();
    
    return $response->withJson($current_date, 200);
});

