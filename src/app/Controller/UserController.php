<?php

namespace App\Controller;

use App\Class\User;
use App\Interface\ControllerInterface;

class UserController implements ControllerInterface
{


    public function index(){

        //Pediriamos al modelo que nos buscara todos los usuarios
        $usuario1= new User('miguel','miguel@miguel.com','hola');
        $usuario2= new User('paula','paula@paula.com','holapaula');
        $usuarios = [$usuario1,$usuario2];


        //Tengo que crear una vista de administracion que muestre a los usuarios

        include_once DIRECTORIO_VISTAS_BACKEND."usuarios.php";



    }

    public function show($id){

        //var_dump($_SERVER);
        //Tengo que buscar en la base de datos los datos del usuario $id
        $usuario = new User('paula','paula@paula.com','holapaula');

        //Tengo que mostrar una vista con los datos del usuario que he obtenido
        include_once DIRECTORIO_VISTAS_BACKEND."mostrarUsuario.php";
    }

    public function create(){
        include_once "app/View/frontend/register.php";
    }

    public function store(){
        var_dump($_POST);

    }

    public function edit($id){

        //Tenemos que buscar en la base de datos el usuario que nos han pasado con ID
        //$usuario=UserModel::loadUser($id)
        $usuario = new User('paula','paula@paula.com','holapaula');

        //Llamamos a la vista para que se presente el formulario de edición con los datos del usuario
        include_once "app/View/backend/editUser.php";


    }

    public function update($id){
        return "hola";

    }

    public function destroy($id){

    }

    public function verify(){
        var_dump($_POST);



    }

}