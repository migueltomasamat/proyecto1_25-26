<?php

namespace App\Interface;

interface ControllerInterface
{
    public function index();

    public function show($id);

    public function store();

    public function update($id);


    public function destroy($id);

}