<?php
require __DIR__.'/vendor/autoload.php';

new SON\Framework\Router;
$route = $_SERVER['PATH_INFO'] ?? '/';
if ($route == '/'){
    echo "Estamos na home";
}