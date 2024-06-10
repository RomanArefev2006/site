<?php
    require_once CONFIG . "/routes.php";


    $uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

    if(array_key_exists($uri, $routes)) {
        require_once CONTROLLERS . "{$routes[$uri]}";
    } else {
        http_response_code(404);
        echo "Error 404";
        die();
    }
