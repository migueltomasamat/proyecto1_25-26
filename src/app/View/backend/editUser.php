
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

        <input type="button" onclick="put()" value="Registrar Usuario">
    </form>

    <script>
        function put(){
            let username=document.getElementById('inputUsername');
            let password=document.getElementById('inputPassword');
            let email=document.getElementById('inputEmail');

                console.log(username.value);
            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

            const urlencoded = new URLSearchParams();
            urlencoded.append("username", username.value);
            urlencoded.append("password", password.value);
            urlencoded.append("email", email.value);



            const requestOptions = {
                method: "PUT",
                headers: myHeaders,
                body: urlencoded,
                redirect: "follow"
            };

            fetch("http://localhost:8080/user/<?=$usuario->getUuid()?>", requestOptions)
                .then((response) => Redirect())
                .then((result) => console.log(result))
                .catch((error) => console.error(error));
        }
        function Redirect() {
            window.location.replace("http://localhost:8080/user/<?=$usuario->getUuid()?>");
        }
    </script>

<?php
include_once DIRECTORIO_TEMPLATE_BACKEND."footer.php";
