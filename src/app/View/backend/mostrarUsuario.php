<?php
$title="Administración de Netflix";

include_once DIRECTORIO_TEMPLATE_BACKEND."head.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."aside.php";
$tituloSeccion="Datos de ".$usuario->getUsername();
include_once DIRECTORIO_TEMPLATE_BACKEND."main.php";
?>
    <div class="container">
        <div class="mb-3">
            <ul class="list-group">
                <li class="list-group-item"><?=$usuario->getUsername()?></li>
                <li class="list-group-item"><?=$usuario->getEmail()?></li>
                <li class="list-group-item"><?=$usuario->getUuid()?></li>
                <li class="list-group-item"><?=$usuario->getPassword()?></li>
            </ul>
        </div>

        <div class="mb-3">
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn btn-outline-secondary" type="button" onclick="redireccionEditar()"> Modificar Datos </button>
                <button class="btn btn-primary btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalBorrado"> Borrar </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalBorrado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Borrado de Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Se va a eliminar el usuario <?=$usuario->getUsername()?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cerrar </button>
                        <button type="button" class="btn btn-primary btn-danger" onclick="peticionDelete()">Borrar Usuario</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function redireccionEditar() {
                window.location.replace("http://localhost:8080/user/<?=$usuario->getUuid()?>/edit");
            }
            function peticionDelete(){

                const requestOptions = {
                    method: "DELETE",
                    redirect: "follow"
                };

                fetch("http://localhost:8080/user/<?=$usuario->getUuid()?>", requestOptions)
                    .then((response) => console.log(response))
                    .then((result) => redireccionBorrado())
                    .catch((error) => console.error(error))
            }

            function redireccionBorrado(){
                window.location.replace("http://localhost:8080/user")
            }

        </script>

    </div>




<?php
include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";
