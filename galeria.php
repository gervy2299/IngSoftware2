<!DOCTYPE html>
<html>
<head>
	<title>Galeria|SoonMarie</title>
	<!--<link rel="stylesheet" href="./style.css">  ESTILO-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">	
<link rel="stylesheet" type="text/css" href="estiloss/estilasos.css">
<link rel="stylesheet" type="text/css" href="estiloss/galeria.css">
<link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
</head>
<body>
<!--	<a href="staff" >Empleado</a>
	<a href="admin">Administrador</a>-->

<div class="modal" id="modal">
		<div class="modal__content">
			<img src="" alt="" class="modal__img" id="modal__img">
		</div>
<div class="modal__boton" id="modal__boton">X</div>		
</div>	


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
		<li class="menu__item"><a href="galeria.php" class="menu__link menu__link--select">Galeria</a></li>
		<li class="menu__item"><a href="contacto.php" class="menu__link ">Reserva</a></li>
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
	<img src="recursos/banner3.jpg" alt="" class="banner__img">
	<div class="banner__content">Disfruta de lo mejor</div>
</section>

<main class="main">
<div class="group gallery">
	<h2 class="group__title">Nuestra Galeria</h2>
	<div class="container container--flex">
		<div class="column column--50-25">
			<img src="recursos/plato5.jpg" alt="" class="gallery__img gallery__img--big">
			<img src="recursos/plato6.jpg" alt="" class="gallery__img gallery__img--small">
		</div>
		<div class="column column--50-25">
			<img src="recursos/plato7.jpg" alt="" class="gallery__img gallery__img--small">
			<img src="recursos/plato8.jpg" alt="" class="gallery__img gallery__img--big">
		</div>
		<div class="column column--50-25">
			<img src="recursos/plato9.jpg" alt="" class="gallery__img gallery__img--big">
			<img src="recursos/plato10.jpg" alt="" class="gallery__img gallery__img--small">
		</div>
		<div class="column column--50-25">
			<img src="recursos/plato11.jpg" alt="" class="gallery__img gallery__img--small">
			<img src="recursos/plato4.jpg" alt="" class="gallery__img gallery__img--big">
		</div>
	</div>
</div>

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
<script src="js/modal.js"></script>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

	
</body>
</html>