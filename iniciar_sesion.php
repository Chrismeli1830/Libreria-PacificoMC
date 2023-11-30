<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Pacifico</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="descripcion.css">
    <link rel="stylesheet" href="iniciarsesion.css">
</head>

	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
			<img src="img/libreria.png" alt="site logo" width=70 height=50>
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="consulta1.html">Productos</a></li>
					<li><a href="acerca.html">Acerca</a></li>
					<li><a href="iniciar_sesion.html">Inicio de sesion</a></li>
					<li><a href="registrar_sesion.html">Registrar cuenta</a></li>
				</ul>
			</div>
			<div id="myBtn" class="burger-container" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>

<body background="img/img/libro.jpeg">
     <!--Encabezado de la pagima--> 
     <header class="encabezadosesion" >
        <a href="index.php">
        </a>
        <a href="index.html">
        <h1>Libreria Pacifico</h1>
        </a>
    </header> 
    <div class="form_sesion">
        <form method="post" action="perfil_resp.html">
            <div class="texto-centrado">
                <h2> Inicia sesión </h2>
            </div>
            <center>
                <img class = "icons" src="img/img/perfil.png">
            </center>
            <hr>
            <input type="email" name="email" placeholder="Correo electronico" required><br><br>
            <input type="password" name="password" placeholder="Contraseña" required><br><br>
            <input id="enviar1" name="enviar" type="submit" value="Iniciar sesión"><br>
            <h3> ¿No tiene cuenta? <a href="registrar_sesion.html">Crear cuenta</a></h3>
        </form>
    </div>
</body>
<!-- Footer -->
<footer class="site-footer">
    <div class="site-container">
        <div class="footer-inner">
            <div class="footer-info">
                <div class="footer-info__left">
                    <img src="img/footer-img.jpg" alt="about me image">
                    <p>Derechos reservados</p>
                </div>
                <div class="footer-info__right">
                    <h5>Contactanos</h5>
                    <p class="footer-phone">Telefono: +525616221825</p>
                    <p></p>
                    <div class="social-icons">
                        <a href="https://twitter.com/x" target="_blank"><img src="img/social-twitter.png" alt="social icon"></a>
                        <a href="https://www.pinterest.com.mx/" target="_blank"><img src="img/social-pinterest.png" alt="social icon"></a>
                        <a href="https://www.youtube.com/?gl=ES" target="_blank"><img src="img/social-youtube.png" alt="social icon"></a>
                    </div>
                </div>
            </div>
            <div class="footer-contact-form">
                <h5>Contact Form</h5>
                <form class="contact-form">
                    <div class="contact-form__input">
                        <input type="text" name="name" placeholder="Nombre">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <textarea></textarea>
                    <input type="submit" name="submit" value="Enviar" class="submit-button">
                </form>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="site-container footer-bottom-inner">
            <p>© 2023 MC |   All rights Reserved.</p>
            <div class="footer-bottom__img">
                <img src="img/footer-mastercard.png" alt="footer image">
                <img src="img/footer-paypal.png" alt="footer image">
                <img src="img/footer-visa.png" alt="footer image">
                <img src="img/footer-fedex.png" alt="footer image">
                <img src="img/footer-dhl.png" alt="footer image">
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</html>