<?php

$URI = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];
function abort($error = 404){
    http_response_code($error);
    include "views/{$error}.view.php";
    die();
}

function routing($URI, $routes){
    if (array_key_exists($URI, $routes)) {
        require $routes[$URI];
    } else {
        abort();
    }
}

routing($URI, $routes);
