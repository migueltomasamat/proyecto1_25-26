<?php

include_once "vendor/autoload.php";
include_once "env.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();


//Definición de rutas
$router->any('/', function(){

    return 'Página principal';
});

$router->get('/administracion',function(){
    include_once DIRECTORIO_VISTAS_ADMINISTRACION . "welcome.php";
});

$router->get('/admin-peliculas',function(){
    include_once DIRECTORIO_VISTAS_ADMINISTRACION . "peliculas.php";
});
$router->get('/login',function(){
    include_once DIRECTORIO_VISTAS_ADMINISTRACION . "login.php";
});



//Resolución de rutas
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}
catch(HttpRouteNotFoundException $e){
    include_once DIRECTORIO_VISTAS_ADMINISTRACION."404.html";
    die();
    $response= "";
}
// Print out the value returned from the dispatched function
echo $response;
