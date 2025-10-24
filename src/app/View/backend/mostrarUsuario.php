<?php
$title="Administración de Netflix";

include_once DIRECTORIO_TEMPLATE_BACKEND."head.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."aside.php";
$tituloSeccion="Datos de ".$usuario->getUsername();
include_once DIRECTORIO_TEMPLATE_BACKEND."main.php";
?>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item"><?=$usuario->getUsername()?></li>
            <li class="list-group-item"><?=$usuario->getEmail()?></li>
            <li class="list-group-item"><?=$usuario->getUuid()?></li>
            <li class="list-group-item"><?=$usuario->getPassword()?></li>
        </ul>
    </div>




<?php
include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";
