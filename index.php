<!DOCTYPE html>
<html>
<head>
	<title>Restaurante|SoonMarie</title>
	<!--<link rel="stylesheet" href="./style.css">  ESTILO-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">	
<link rel="stylesheet" type="text/css" href="estiloss/estilasos.css">
<link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
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
		<li class="menu__item"><a href="index.php" class="menu__link menu__link--select">Inicio</a></li>
		<li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
		<li class="menu__item"><a href="galeria.php" class="menu__link">Galeria</a></li>
		<li class="menu__item"><a href="contacto.php" class="menu__link">Reserva</a></li>
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
	<img src="recursos/banner.jpg" alt="" class="banner__img">
	<div class="banner__content">La mejor y exquisita comida está aquí</div>
</section>

<main class="main">
	<section class="group group--color">
		<div class="container">
			<h2 class="main__title">Bienvenido a su restaurante favorito</h2>
			<p class="main__txt">Somos un restaurante líder con 11 años de tradición, enfocado en preservar la sazón de la gastronomía peruana<br>Soon Marie es más que un restaurante, es un hogar y lo demostramos en la calidez de nuestra atención en cada visita a esta casa y en los detalles de cada plato.</p>
		</div>
	</section>
<section class="group main__about__description">
	<div class="container container--flex">
		<div class="column column--50"></div>
		<img class="imagen" src="recursos/food.jpg">
		<div class="" class="column column--50">
			<h3 class="column__title">Expertos en la mejor comida</h3>
			<p class="column__txt">Es nuestro espacio privado con algo diferente, un lugar perfecto para pasar un buen rato, hacer celebraciones, reuniones de trabajo o simplemente estar con amigos. Es un espacio de creación, espontaneidad y aprendizaje. Pregúntanos sobre las clases interactivas, cenas privadas, catas de pisco, vinos y cervezas a cargo de Pedro Miguel Schiaffino y el equipo.</p>
		<a href="recursos/carta.pdf" class="btn btn--contact">Especialidad</a>

		</div>
	</div>
</section>

<section class="group today-special">
	<h2 class="group__title">Especial de hoy</h2>
	<div class="container container--flex">
		<div class="column column--50-25">
			<img src="recursos/plato1.jpg" alt="" class="today-special__img">
			<div class="today-special__title">Ensalada</div>
			<div class="today-special__price">s/.20</div>
		</div>
		<div class="column column--50-25">
			<img src="recursos/plato2.jpg" alt="" class="today-special__img">
			<div class="today-special__title">Brochetas</div>
			<div class="today-special__price">s/.15</div>
		</div>
		<div class="column column--50-25">
			<img src="recursos/plato3.jpg" alt="" class="today-special__img">
			<div class="today-special__title">Carnes</div>
			<div class="today-special__price">s/.25</div>
		</div>
		<div class="column column--50-25">
			<img src="recursos/plato4.jpg" alt="" class="today-special__img">
			<div class="today-special__title">Comida Sana</div>
			<div class="today-special__price">s/.19</div>
		</div>
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