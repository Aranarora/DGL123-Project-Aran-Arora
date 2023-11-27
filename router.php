<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    $proj_root => 'controllers/index.php',
    '/DGL123-Project-Aran-Arora/about' => 'controllers/about.php',
    '/DGL123-Project-Aran-Arora/contact' => 'controllers/contact.php',
    '/DGL123-Project-Aran-Arora/ride' => 'controllers/ride.php',
    '/DGL123-Project-Aran-Arora/profile' => 'controllers/profile.php',
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
