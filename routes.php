<?php

$routes = [
    get_root_directory() . '/' => 'frontend/index.php'
];

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

if(array_key_exists($path, $routes)){
    require $routes[$path];
}else{
    require 'frontend/404.php';
}

?>