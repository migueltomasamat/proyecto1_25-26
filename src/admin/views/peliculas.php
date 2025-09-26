<?php
$title="Administración de Netflix";

include_once "template/head.php";
include_once "template/header.php";
include_once "template/aside.php";
$tituloSeccion="Peliculas";
include_once "template/main.php";


$peliculas=[
    [
        "nombre"=>"Avatar",
        "director"=>"James Cameron",
        "duracion"=>190
    ],
    [
        "nombre"=>"Titanic",
        "director"=>"James Cameron",
        "duracion"=>190
    ],
    [
        "nombre"=>"Terminator 2",
        "director"=>"James Cameron",
        "duracion"=>97
    ]
];
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Director</th>
        <th scope="col">Duración</th>
    </tr>
    </thead>
    <tbody>
    <?php
        for($i=0;$i<count($peliculas);$i++){
            echo "<tr><th scope='row'>". $i+1 ."</th>";
            echo "<td>". $peliculas[$i]["nombre"] ."</td>";
            echo "<td>". $peliculas[$i]["director"] ."</td>";
            echo "<td>". $peliculas[$i]["duracion"] ."</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>

<?php
include_once "template/footer.php";
