<?php

declare(strict_types=1);
const LETRAS = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
    function letraDNI (int $numero):?string{
        $moduloDNI = $numero%23;
        return LETRAS[$moduloDNI];
    };


    function ejemploArrayAsociativo():void{
        $datosUsuarios =[
            "nombre"=>"Miguel Ángel",
            "asignaturas"=>['DWES Semipresencial','DWES']
        ];

        foreach ($datosUsuarios as $clave=>$valor){
            echo "La clave es $clave";
            var_dump($valor);
        }

    }
