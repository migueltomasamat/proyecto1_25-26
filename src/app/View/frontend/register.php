<html>
<head>
    <title>Registro de usuario</title>
</head>
<body>
    <h1>Crear un nuevo usuario</h1>

    <form action="/user" method="post">
        <input type="text" id="inputUsername" name="username" placeholder="Introduce tu nombre de usuario">
        <input type="email" id="inputEmail" name="email" placeholder="Intoduce tu correo">
        <input type="password" id="inputPassword" name="password" placeholder="Introduce tu contraseña">

        <input type="submit" value="Registrar Usuario">
    </form>

</body>


</html>
