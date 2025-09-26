<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netflix Login</title>
    <link rel="stylesheet" href="<?=DIRECTORIO_TEMPLATE_ADMINISTRACION?>cuenta.css" /><!-- Aplico css externo -->
    <link rel="shortcut icon" type="image/jpg" href="<?=DIRECTORIO_IMAGENES_ADMINISTRACION?>netflix-flavicon.png" />
    <meta name="keywords" content="html,css,clon netflix" />
    <meta name="description"
          content="Clon del login de usuario de Netflix España hecho con HTML y CSS para la asignatura de Lenguajes de Marcas del IES Fernando Wirtz" />
    <meta name="author" content="Cristina Correa" />
    <meta name="generator" content="VSCode" />
    <meta name="theme-color" content="#000" />

    <meta name="google" content="nositelinkssearchbox" />
    <meta name="google" content="notranslate" />
    <meta name="robots" content="index, nofollow" />


    <meta property="og:title" content="Clon de Netflix España con HTML y CSS">
    <meta property="og:description"
          content="Clon del login de usuario de Netflix España hecho con HTML y CSS para la asignatura de Lenguajes de Marcas del IES Fernando Wirtz">
</head>
<body>
<div class="contenido">
    <nav>
        <img class="logo" src="<?=DIRECTORIO_IMAGENES_ADMINISTRACION?>logo.png" alt="netflixLogo" />
    </nav>
    <div class="caja">
        <h2>Iniciar sesión</h2>
        <div class="form" action="/administracion">
            <input
                type="text"
                placeholder="Correo electrónico o número de teléfono"
                required
            />
            <input type="password" placeholder="Contraseña" required />
        </div>
        <button>Iniciar sesión</button>
        <div class="checkbox">
            <div class="recordar">
                <input type="checkbox" id="checkbox1"/>
                <label for="remember">Recuérdame</label>
            </div>
            <div>
                <p>¿Necesitas ayuda?</p>
            </div>
        </div>
        <div class="subscripcion">
            <p>¿Todavía sin Netflix? <span>Subscríbete ya.</span></p>
            <p>Esta página utiliza Google reCAPTCHA para garantizar que no eres un robot.
                <br/> <br/> La información recopilada por Google reCAPTCHA está sujeta a la <a href="https://policies.google.com/privacy">Política de Privacidad</a>
                y las <a href="https://policies.google.com/terms">Condiciones de servicio</a> de
                Google, y se utiliza para proporcionar, mantener y mejorar el servicio de reCAPTCHA, así como para fines generales de
                seguridad (Google no la utiliza para publicidad personalizada). </p>
        </div>
    </div>
</div>
</body>
<footer>
    <p>¿Preguntas? Llama al 900-759-106</p>
    <div class="links">
        <ul>
            <li><a href="/faq">Preguntas frecuentes</a></li>
            <li><a href="/help">Centro de ayuda</a></li>
            <li><a href="/terminos">Términos de uso</a></li>
            <li><a href="/privacidad">Privacidad</a></li>
            <li><a href="/cookies">Preferencias de cookies</a></li>
            <li><a href="/info-corporativa">Información corporativa</a></li>
        </ul>
    </div>
</footer>
</html>
