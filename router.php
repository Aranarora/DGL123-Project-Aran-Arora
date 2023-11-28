<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    $proj_root => 'controllers/index.php',
    $proj_root . 'about' => 'controllers/about.php',
    $proj_root . 'contact' => 'controllers/contact.php',
    $proj_root . 'ride' => 'controllers/ride.php',
    $proj_root . 'profile' => 'controllers/profile.php',
];


function routeToController($uri, $routes){
if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}else {
    abort(404);
}
}

function abort($code){
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
