<?php
$title="Administración de Netflix";

include_once "template/head.php";
include_once "template/header.php";
include_once "template/aside.php";
$tituloSeccion="General";
include_once "template/main.php";
?>

<form>
    <div class="mb-3">
        <label for="nombrePelicula" class="form-label">Nombre de Pelicula</label>
        <input type="email" class="form-control" id="nombrePelicula" aria-describedby="nombrePelicula">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
include_once "template/footer.php";
