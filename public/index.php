<?php



$routes = [
  '/' =>  '../index.php',
  '/about' => '../about.php'
];

$route = $_SERVER['REQUEST_URI'];
if(array_key_exists($route, $routes)) {
    include $routes[$route];
    exit;
} else {
    include __DIR__ . '/../App/404.php';
}
