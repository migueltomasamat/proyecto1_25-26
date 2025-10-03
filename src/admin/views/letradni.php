<?php
$title="Calculo de Letra de DNI";

include_once "template/head.php";
include_once "template/header.php";
include_once "template/aside.php";
$tituloSeccion="Función Calcular Letra DNI";
include_once "template/main.php";
?>

    <form class="row g-3">

        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">DNI</label>
            <input type="text" class="form-control" id="inputPassword2" placeholder="DNI" value="<?=$dni?>">
        </div>
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="<?=$letra?>">
        </div>
    </form>

<div>
    <?=$resultado?>
</div>


<?php
include_once "template/footer.php";
