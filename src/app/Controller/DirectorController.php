<?php

namespace App\Controller;

use App\Class\Director;
use App\Interface\ControllerInterface;

class DirectorController implements ControllerInterface
{

    public function index()
    {
        return "He pedido todos los directores";
    }

    public function show($id)
    {
        return "Quiero los datos del director $id";
    }

    public function store()
    {
        //var_dump($_POST);
        $director = new Director($_POST['name']);

        $fecha_nacimiento = new \DateTime($_POST['birthdate']);
        $director->setBirthdate($fecha_nacimiento);

        return json_encode($director);
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        return "Voy a borrar el director 5";
    }

    public function create(){
        include_once "admin/views/directores.php";
    }
}