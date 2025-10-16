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

    public function store(){

    }

    public function update($id){


    }

    public function destroy($id){

    }



}