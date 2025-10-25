<?php
$title="Administración de Netflix";

include_once DIRECTORIO_TEMPLATE_BACKEND."head.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."aside.php";
$tituloSeccion="Usuarios";
include_once DIRECTORIO_TEMPLATE_BACKEND."main.php";
?>

    <div class="row">
        <?php
            foreach ($usuarios as $usuario){
        ?>
            <div class="card m-1" style="width: 18rem;">
                <img src="<?=DIRECTORIO_IMG_BACKEND?>user_generic.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?=$usuario->getUsername()?></h5>
                    <p class="card-text"><?=$usuario->getEmail()?></p>
                    <a href="/user/<?=$usuario->getUUid()?>" class="btn btn-primary">Ver Más Datos</a>
                </div>
            </div>
        <?php } ?>
    </div>




<?php
include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";
