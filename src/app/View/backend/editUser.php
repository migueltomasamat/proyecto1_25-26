
<?php
$title="Administración de Netflix";

include_once DIRECTORIO_TEMPLATE_BACKEND."head.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."header.php";
include_once DIRECTORIO_TEMPLATE_BACKEND."aside.php";
$tituloSeccion="Editar ".$usuario->getUsername();
include_once DIRECTORIO_TEMPLATE_BACKEND."main.php";
?>

    <form>
        <input type="text" id="inputUsername" name="username" placeholder="Introduce tu nombre de usuario" value="<?=$usuario->getUsername()?>">
        <input type="email" id="inputEmail" name="email" placeholder="Intoduce tu correo" value="<?=$usuario->getEmail()?>">
        <input type="password" id="inputPassword" name="password" placeholder="Introduce tu contraseña" value="<?=$usuario->getPassword()?>">

        <input type="button" onclick="put(<?=$usuario->getUuid()?>,null>)" value="Registrar Usuario">
    </form>

    <script src="<?=DIRECTORIO_JS_BACKEND?>peticionPUT.js"> </script>

<?php
include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";
