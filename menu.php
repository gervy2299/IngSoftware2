<!DOCTYPE html>
<html>
<head>
	<title>Menú|SoonMarie</title>
	<!--<link rel="stylesheet" href="./style.css">  ESTILO-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">	
<link rel="stylesheet" type="text/css" href="estiloss/estilasos.css">
<link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="estiloss/menu.css">
<link rel="stylesheet" type="text/css" href="estiloss/galeria.css">
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
		<li class="menu__item"><a href="contacto.php" class="menu__link">Reserva</a></li>
		<li class="menu__item"><a href="menu.php" class="menu__link menu__link--select">Menú</a></li>
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
	<img src="recursos/food.jpg" alt="" class="banner__img">
	<div class="banner__content">La mejor y exquisita comida está aquí</div>
</section>

<main class="main">
<section id="blog">
	<h3 class="today-special__title">Disfruta de estos deliciosos platos:</h3>
	<div class="contenedor" >
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/cuy.jpg" >
		<h4 class="today-special__title">CUY</h4>
		<h4 class="btn btn--contact">S/.22</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/pacha.jpg">
		<h4 class="today-special__title">PACHAMANCA</h4>
		<h4 class="btn btn--contact">S/.26</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/cev.png" >
		<h4 class="today-special__title">CEVICHE</h4>
		<h4 class="btn btn--contact">S/.20</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/arropollo.png" >
		<h4 class="today-special__title">ARROZ CON POLLO</h4>
		<h4 class="btn btn--contact">S/.19</h4>
		<div id="recon"></div>
	</article>

</div>
</section>
<section id="blog">
	<div class="contenedor">
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/causa.png" >
		<h4 class="today-special__title">CAUSA</h4>
		<h4 class="btn btn--contact">S/.16</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/maza.jpg">
		<h4 class="today-special__title">MAZAMORRA</h4>
		<h4 class="btn btn--contact">S/.10</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/refe.png" >
		<h4 class="today-special__title">CAMARONES</h4>
		<h4 class="btn btn--contact">S/.15</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/sop.png" >
		<h4 class="today-special__title">SOPA</h4>
		<h4 class="btn btn--contact">S/.20</h4>
		<div id="recon"></div>
	</article>
</div>
</section>
<section id="blog">
	<div class="contenedor">
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/lomo.png" >
		<h4 class="today-special__title">LOMO SALTADO</h4>
		<h4 class="btn btn--contact">S/.18</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/lasaña.jpg">
		<h4 class="today-special__title">LASAÑA</h4>
		<h4 class="btn btn--contact">S/.12</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/pizza.jpg" >
		<h4 class="today-special__title">PIZZA</h4>
		<h4 class="btn btn--contact">S/.12</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/ossocubo.jpg" >
		<h4 class="today-special__title">OSSOBUCO</h4>
		<h4 class="btn btn--contact">S/.16</h4>
		<div id="recon"></div>
	</article>
</div>
</section>
<section id="blog">
	<div class="contenedor">
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/barbacoa.jpg" >
		<h4 class="today-special__title">BARBACOA</h4>
		<h4 class="btn btn--contact">S/.19</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/mole.jpg">
		<h4 class="today-special__title">MOLE</h4>
		<h4 class="btn btn--contact">S/.20</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/ossocubo.jpg" >
		<h4 class="today-special__title">OSSOCUBO</h4>
		<h4 class="btn btn--contact">S/.16</h4>
	</article>
	<article id="tx-rotacion" class="cambio">
		<img class="gallery__img gallery__img" src="recursos/tacos.jpg" >
		<h4 class="today-special__title" class="today-special__title">TACOS</h4>
		<h4  class="btn btn--contact">S/.8</h4>
		<div id="recon"></div>
	</article>
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