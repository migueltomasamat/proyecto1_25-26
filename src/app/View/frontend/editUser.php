<html>
<head>
    <title>Registro de usuario</title>
</head>
<body>
    <h1>Crear un nuevo usuario</h1>

    <form>
        <input type="text" id="inputUsername" name="username" placeholder="Introduce tu nombre de usuario" value="<?=$usuario->getUsername()?>">
        <input type="email" id="inputEmail" name="email" placeholder="Intoduce tu correo" value="<?=$usuario->getEmail()?>">
        <input type="password" id="inputPassword" name="password" placeholder="Introduce tu contraseña" value="<?=$usuario->getPassword()?>">

        <input type="submit" value="Registrar Usuario">
    </form>

</body>


</html>
