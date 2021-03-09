<!DOCTYPE html>
<html>
<head>
	<title>Contacto|SoonMarie</title>
	<!--<link rel="stylesheet" href="./style.css">  ESTILO-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">	
<link rel="stylesheet" type="text/css" href="estiloss/estilasos.css">
<link rel="stylesheet" type="text/css" href="estiloss/contacto.css">
<link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
<style type="text/css">
	#anchito{
		padding:14px; 
	}
</style>
</head>
<body>
<!--	<a href="staff" >Empleado</a>
	<a href="admin">Administrador</a>-->
<header class="main-header">
	<div class="container container--flex">
		<div class="logo-container column--50">
			<h1 class="logo">
				Restaurante | SoonMarie
			</h1>
		</div>
		<div class="main-header__contactInfo column--50">
		<p class="main-header__contactInfo__phone">
			<span class="icon-phone">999-999-999</span>
		</p>	
			<p class="main-header__contactInfo__address">
			<span class="icon-location">Urb Las Dunas 123- Arequipa, Perú</span>
			</p>
			<div></div>
		</div>
	</div>
</header>
<nav class="main-nav">
	<div class="container container--flex">
	<span class="icon-menu" id="btnmenu"></span>	
	<ul class="menu" id="menu">
		<li class="menu__item"><a href="index.php" class="menu__link">Inicio</a></li>
		<li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
		<li class="menu__item"><a href="galeria.php" class="menu__link">Galeria</a></li>
		<li class="menu__item"><a href="contacto.php" class="menu__link menu__link--select">Reserva</a></li>
		<li class="menu__item"><a href="menu.php" class="menu__link">Menú</a></li>
		<li class="menu__item"><a href="staff" class="menu__link">Empleado</a></li>
	    <li class="menu__item"><a href="admin" class="menu__link">Administrador</a></li>
	
	</ul>
	<div class="social-icon">
		<a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
		<a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
		<a href="" class="social-icon__link"><span class="icon-mail"></span></a>
	</div>

	</div>
</nav>
<section class="banner">
	<img src="recursos/banner4.jpg" alt="" class="banner__img">
	<div class="banner__content">Déjanos un mensaje</div>
</section>
<main class="main">
<section class="group contanct">
	<h2 class="group__title">Realiza tu reserva</h2>
<div class="container container--flex">
	<div class="contact-information column--50">
		<h3 class="column__title">Información de contacto</h3>
		<p class="column__txt">Somos un restaurante reconocido con una fama que traciende fronteras, debido a su deliciosa comida preparada por los mejores chefs del Perú y del mundo, dejanos tu reserva y te atenderemos con mucho gusto.</p>
		<p class="column__txt"><span class="icon-phone"></span>Telefono 1:999-999-999</p>
		<p class="column__txt"><span class="icon-phone"></span>Telefono 2:999-999-999</p>
		<p class="column__txt"><span class="icon-location"></span>Urb. Las Dunas 123-Ica, Perú</p>
		<p class="column__txt"><span class="icon-mail"></span>consultas@SoonMarie.com</p>
		<div class="social-icon">
		<a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
		<a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
		<a href="" class="social-icon__link"><span class="icon-mail"></span></a>		
		</div>
	</div>

	<form action="enviar.php" method="post" class="formulario column column--50">
		<label for="" class="formulario__label">Datos Personales:</label>
		<input type="text" class="formulario__input-txt" name="nombre"></input>
		<label for="" class="formulario__label">Correo:</label>
		<input type="text" class="formulario__input-txt" name="correo"></input>
		<label for="" class="formulario__label">Teléfono:</label>
		<input type="text" class="formulario__input-txt" name="telefono"></input>
		<label for="" class="formulario__label">Nº de Comensales:</label>
		<!--<input type="text" class="formulario__input-txt" name="telefono"></input>-->
		<select id="anchito" name="txtcantidad" class="formulario__label">
                                            <option value="">Cantidad de personas</option>
                                            <option value="1 persona">1 persona</option>
                                            <option value="2 personas">2 personas</option>
                                            <option value="3 personas">3 personas</option>
                                            <option value="4 personas">4 personas</option>
                                            <option value="5 personas">5 personas</option>
                                            <option value="6 personas">6 personas</option>
                                            <option value="7 personas">7 personas</option>
                                            <option value="8 personas">8 personas</option>
                                            <option value="9 personas">9 personas</option>
                                            <option value="10 personas">10 personas</option>
                                            <option value="12 personas">12 personas</option>
                                            <option value="15 personas">15 personas</option>
                                            <option value="20 personas">20 personas</option>
                                            <option value="25 personas">25 personas</option>
                                            <option value="30 personas">30 personas</option>
          </select>
		<label for="" class="formulario__label">Platos:</label>
		<input type="text" class="formulario__input-txt" name="platos"></input>
		<label for="" class="formulario__label">Turno:</label>
		<input type="text" class="formulario__input-txt" name="turno"></input>
		<label form="" class="formulario__label">Mensaje:</label>
		<textarea name="mensaje" id="" cols="30" rows="10" class="formulario__textarea"></textarea>
		<input type="submit" class="btn formulario__btn" value="Enviar">
	</form>
</div>
</section>
</main>
<footer class="main-footer">
	<div class="container container--flex">
		<div class="column column--33"><h2 class="column__title">¿Por qué visitarnos?</h2>
		<p class="column__txt">Es más que un restaurante, es un hogar y lo demostramos en la calidez de nuestra atención en cada visita a esta casa.</p></div>
		<div class="column column--33"><h2 class="column__title">Contáctanos</h2>
		<p class="column__txt">Contáctanos</p>
		<p class="column__txt">Urb Las Dunas 123-Ica,Perú</p>
		<p class="column__txt">Teléfono:999-999-999</p>
		<p class="column__txt">consultas@hotmail.com</p>
	</div>
		<div class="column column--33"><h2 class="column__title">Síguenos en nuestras redes Sociales</h2>
		<p class="column__txt"><a href="" class="icon-facebook"></a>Facebook</p>
		<p class="column__txt"><a href="" class="icon-twitter"></a>Síguenos en Twitter</p>
		<p class="column__txt"><a href="" class="icon-youtube"></a>Visita nuestro canal</p>
	</div>
	<p class="copy"> &copy 2020 Jaramillo Cano Victoria|Todos los derechos reservados </p>
	</div>
</footer>

<script src="js/menu.js"></script>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

	
</body>
</html>