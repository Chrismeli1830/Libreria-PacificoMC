<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DULCERIA CLASSIC CANDY</title>
    <link rel="stylesheet" href="http://localhost/dul/est/registrar.css">

    <link rel="stylesheet" href="registrar.css">
</head>
<body background="imagenes index/background/dulcesLogin.jpeg">
     <!--Encabezado de la pagima--> 
     <header class="encabezadosesion" >
        <a href="index.html">
        <img src="../img/LOGO.jpeg" alt="CC" >
        </a>
        <a href="index.html">
        <h1>CLASSIC CANDY</h1>
        </a>
    </header> 
    <div class="form_sesion">
        <form method="post" action="guardar.php">
            <form>
                <h2>Crear Cuenta (Empleado)</h2>
                <hr>
                <input type="text" name="nom" placeholder="nombre(s)" required></label><br><br>
                <input type="text" name="ap" placeholder="apellido paterno" required><br><br>
                <input type="text" name="am" placeholder="apellido materno" required><br><br>
                <label>Fecha de Nacimiento: <input type="date" name="fecha" required></label><br><br>
                <input type="email" name="correo" placeholder="correo electronico" required><br><br>
                <input type="confirmacion" name="confirmacion" placeholder="confirmar correo electronico" required><br><br>
                <input type="password" name="contra" placeholder="contraseña" required><br><br>
                <input type="tel" name="tel" placeholder="telefono" required><br><br>
                <input id="enviar1" type="submit" name="submit" value="Registrar">
                <h3> ¿Ya tiene cuenta? <a href="iniciar_sesion.html">Inicia sesion</a></h3>
            </form>
        </form>
    </div>
</body>
<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <div class ="footer-links">
                <h4>Compañia</h4> 
                <ul>
                    <li><a>Acerca de Nosotros</a></li>
                </ul>
            </div>
            <div class ="footer-links">
                <h4>Ubicación</h4> 
                <ul>
                    <li><a>Av. Pantitlan #246 Col. Raul Romero</a></li>
                    <li><i>Teléfono 5557656030</i></li>
                    <li><i>© CyberPunk</i></li>
                </ul>
            </div>
            <div class ="footer-links">
                <h4>Siguenos</h4> 
                <div class="social-link">
                    <a href="https://es-la.facebook.com/"><img src = "imagenes index/icons/facebook.png" height="30px" width="30px"/></a>
                    <a href="https://www.instagram.com/"><img src = "imagenes index/icons/instagram.jpeg" height="30px" width="30px"/></a>
                    <a href="https://twitter.com/?lang=es"><img src = "imagenes index/icons/twitter.png" height="28px" width="28px"/></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>