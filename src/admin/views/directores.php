<?php
$title="Administración de Netflix";

include_once "template/head.php";
include_once "template/header.php";
include_once "template/aside.php";
$tituloSeccion="Director";
include_once "template/main.php";?>


<div>
    <form action="/director" method="post">
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="name">
        </div>
        <div class="mb-3">
            <label for="inputFechaNac" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="inputFechaNac" name="birthdate">
        </div>
        <div class="mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>
</div>

<?php
include_once "template/footer.php";
