<?php

namespace App\Controller;

use App\Interface\ControllerInterface;

class UserController implements ControllerInterface
{


    public function index(){

    }

    public function show($id){
        return "Voy a mostrar el usuario $id";
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

        //Llamamos a la vista para que se presente el formulario de edición con los datos del usuario
        include_once "app/View/frontend/editUser.php";


    }

    public function update($id){


    }

    public function destroy($id){

    }



}