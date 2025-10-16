<?php

include_once "vendor/autoload.php";
include_once "env.php";
include_once "auxiliar/auxfunctions.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use App\Controller\UserController;

$router = new RouteCollector();


//Definición de rutas
$router->get('/user',[UserController::class,'index']);
$router->get('/user/{id}',[UserController::class,'show']);
$router->post('/user',[UserController::class,'store']);
$router->put('/user/{id}',[UserController::class,'update']);
$router->delete('/user/{id}',[UserController::class,'destroy']);








































//Ejemplos de definición de rutas
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

$router->post('/login',function(){
    //var_dump($_POST);

    $datosUsuario['usuario'] = $_POST['usuario'];
    $datosUsuario['password'] = $_POST['password'];
    return json_encode($datosUsuario);
});

$router->delete('/pelicula/{id:\d+}',function($id){
    echo "Se borraria la pelicula $id";
});


$router->get('/ejemplofuncion',function(){

    var_dump($_GET);
    if (isset($_GET['dni'])){
        $dniParametro = $_GET['dni'];
        echo $dniParametro;

        echo letraDNI($dniParametro);
    }else{
        echo "Parametro recibido de forma incorrecta";
    }
});

$router->get('/calcular-letra-dni',function(){

    $resultado = "";
    $dni=$_GET['dni'];
    $letra="";
    if (isset($_GET['dni'])){
        $resultado = "La letra correspondiente al DNI:" . $_GET['dni'] . " es: ";
        $resultado .= letraDNI($_GET['dni']);
        $letra=letraDNI($_GET['dni']);

    }else{
        $resultado = "No se ha podido calcular la letra del DNI. 
        Nombre de parámetro incorrecto";
    }
    include_once DIRECTORIO_VISTAS_ADMINISTRACION."letradni.php";

});



//Resolución de rutas
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}
catch(HttpRouteNotFoundException $e){
    return include_once DIRECTORIO_VISTAS_ADMINISTRACION."404.html";
}
// Print out the value returned from the dispatched function
echo $response;
