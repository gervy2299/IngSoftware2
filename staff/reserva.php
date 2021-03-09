<?php 
  include("../functions.php");
  if((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])) ) 
    header("Location: login.php");
  if($_SESSION['user_level'] != "staff")
    header("Location: login.php");
  /*
  echo $_SESSION['uid'];
  echo $_SESSION['username'];
  echo $_SESSION['user_level'];
  */
  function getStatus () {
      global $sqlconnection;
  }
?>
<?php
//paginacion resecli
 require '../database.php';
   error_reporting(0); //para las notice
$sql ="SELECT * FROM reservacli $where ORDER BY Id ASC";
   $resultado  = $mysqli->query($sql);

  $totalRegistros=mysqli_num_rows($resultado);
   $regxpag=5;
   $paginas=$totalRegistros/$regxpag;
   $paginas=ceil($paginas);
?>

<?php
 require '../database.php';
   error_reporting(0); //para las notice
$sql ="SELECT * FROM reservaemple $where ORDER BY reserva_id_Reserva ASC";
   $resultado  = $mysqli->query($sql);

  $totalRegistros=mysqli_num_rows($resultado);
   $regxpag=5;
   $paginas=$totalRegistros/$regxpag;
   $paginas=ceil($paginas);
?>
<?php
$conexion=mysqli_connect('localhost' ,'root','funciona','restomaria'); 
 //echo "CONECTADO";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reserva-Empleados</title>
	<!--<link rel="stylesheet" href="./style.css">  ESTILO-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/emple.css">
<link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
<style type="text/css">
  #tabla1{
   width: 90%;
  /*background: rgba(95, 158, 160,7);*/
  background: rgba(0,0,0,0.9);
  color:white;
  margin: 50px auto; 
  box-shadow: 0 0 20px #333;
  display: grid; /*para que ocupe todo*/
padding:2px; 
  }
  .table-item{
  padding: 10px;

  border: 2px solid #7A7575;
}
.encabezado{
  background: #DE423A;
  font-weight: bold;

  border: 2px solid #7A7575;
}
</style>



</head>
<body id="page-top">
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
	<li class="menu__item"><a href="menu.php" class="menu__link">Menú</a></li>
		<li class="menu__item"><a href="staff" class="menu__link menu__link--select">Empleado</a></li>
	<li class="menu__item"><a href="admin" class="menu__link">Administrador</a></li>

	</ul>
	<div class="social-icon">
		<a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
		<a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
		<a href="" class="social-icon__link"><span class="icon-mail"></span></a>
	</div>

	</div>
</nav>
       <div id="wrapper">
 <!------------------ Sidebar ------------------->
        <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Panel de Control</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="turno.php">
          <span class="icon-clock">
            <span>Turno</span>
          </a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="reserva.php">
       <span class="icon-bubble-3">
            <span>Reserva</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Cerrar Sesión</span>
          </a>
        </li>
      </ul>
      <div id="content-wrapper">
        <div class="container-fluid">
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Page Content -->
          <div class="row">
            <div> <!--Se puede cambiar el num-->
              <div>
                      <p class="main__title">RESERVA CLIENTE</p>    
<!--paginacion-->
<div class="container">
  <?php
    error_reporting(0); //para las notice
  if (!$_GET) {
    header('Location:/ProgramacionWeb/remaria/staff/reserva.php?pagina=1');
  }
  if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
    header('Location:/ProgramacionWeb/remaria/staff/reserva.php?pagina=1');
  }
  if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
  }else{
    $pagina=1;
  }

$iniciar=($pagina-1)*$regxpag;

$sql_registros="SELECT * FROM reservacli ORDER BY Id ASC LIMIT $iniciar,$regxpag";
$result=$mysqli->query($sql_registros);

  ?>
<!--fin-->
    <div id="tabla1">
 <table class="">
              <thead>
           <tr>
      <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>Cliente</b></td>
    <td class="encabezado"><b>Telefono</b></td>
    <td class="encabezado"><b>Cantidad de Comensales</b></td>
   <td class="encabezado"><b>Turno Tarde</b></td>
   <td class="encabezado"><b>Turno Noche</b></td>
   <td class="encabezado"><b>Código de Mesa</b></td>
    <td class="encabezado"><b>Código de Delivery</b></td>
    <td class="encabezado"><b>Especialidades</b></td>
   <td class="encabezado"><b>Plato</b></td>
    <td class="encabezado"><b>Detalles</b></td>
    <td class="encabezado"><b>Precio</b></td>

</tr>
              </thead>

  <tbody>
              <?php while($row =$result->fetch_array(MYSQLI_ASSOC)){?>
                      <tr>
                       <td class="table-item"><?php echo $row ['Id']?></td>
  <td class="table-item"><?php echo $row ['Cliente']?></td>
  <td class="table-item"><?php echo $row ['Telefono']?></td>
  <td class="table-item"><?php echo $row ['Can_Comensales']?></td>
  <td class="table-item"><?php echo $row ['Tarde']?></td>
  <td class="table-item"><?php echo $row ['Noche']?></td>
  <td class="table-item"><?php echo $row ['Cod_Mesa']?></td>
  <td class="table-item"><?php echo $row ['Cod_Delivery']?></td>
  <td class="table-item"><?php echo $row ['Especialidades']?></td>
  <td class="table-item"><?php echo $row ['Plato']?></td>
  <td class="table-item"><?php echo $row ['Platos_Detalles']?></td>
  <td class="table-item"><?php echo $row ['Platos_Precio']?></td>
  
                      </tr>
                      <?php } ?>
            </tbody>
            </table>
</div>
 <!--paginacion-->
              <nav aria-label="Page navigation example">
        <ul class="pagination pull-right">
          <li class="page-item
          <?php echo $_GET['pagina']<=1? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="reserva.php?pagina=<?php echo $_GET['pagina']-1 ?>">
            Anterior
            </a>
          </li>

          <?php for($i=0; $i<$paginas; $i++): ?>
          <li class="page-item 
          <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"
          >
            <a class="page-link" 
            href="reserva.php?pagina=<?php echo $i+1 ?>">
              <?php  echo $i+1; ?>
            </a>
          </li>
          <?php endfor ?>

          <li class="page-item
          <?php echo $_GET['pagina']>=$paginas? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="reserva.php?pagina=<?php echo $_GET['pagina']+1 ?>">
            Siguiente
            </a>
          </li>
        </ul>
    </nav>
</div>
              <!--fin-->

<h1 class="main__title">Reserva de Empleado</h1>
  
<!--paginacion-->
<div class="container">
  <?php
    error_reporting(0); //para las notice
  if (!$_GET) {
    header('Location:/ProgramacionWeb/remaria/admin/index.php?pagina=1');
  }
  if ($_GET['pagina']>$paginas || $_GET['pagina']<=0) {
    header('Location:/ProgramacionWeb/remaria/admin/index.php?pagina=1');
  }
  if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
  }else{
    $pagina=1;
  }

$iniciar=($pagina-1)*$regxpag;

$sql_registros="SELECT * FROM reservaemple ORDER BY reserva_id_Reserva ASC LIMIT $iniciar,$regxpag";
$result=$mysqli->query($sql_registros);

  ?>
<!--fin-->
 <div id="tabla1">
 
          <table>
              <thead>
           <tr>
      <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>Empleado</b></td>
    <td class="encabezado"><b>Telefono</b></td>
    <td class="encabezado"><b>Cantidad de Comensales</b></td>
   <td class="encabezado"><b>Turno Tarde</b></td>
   <td class="encabezado"><b>Turno Noche</b></td>
   <td class="encabezado"><b>Código de Mesa</b></td>
    <td class="encabezado"><b>Código de Delivery</b></td>
    <td class="encabezado"><b>Especialidades</b></td>
   <td class="encabezado"><b>Plato</b></td>
    <td class="encabezado"><b>Detalles</b></td>
    <td class="encabezado"><b>Precio</b></td>

</tr>
              </thead>

  <tbody>
              <?php while($row =$result->fetch_array(MYSQLI_ASSOC)){?>
                      <tr>
                       <td class="table-item"><?php echo $row ['reserva_id_Reserva']?></td>
  <td class="table-item"><?php echo $row ['Empleado']?></td>
  <td class="table-item"><?php echo $row ['Telefono']?></td>
  <td class="table-item"><?php echo $row ['Categoria']?></td>
  <td class="table-item"><?php echo $row ['reserva_Cod_Mesa']?></td>
  <td class="table-item"><?php echo $row ['reserva_Cod_Delivery']?></td>
  <td class="table-item"><?php echo $row ['especialidades_Nombre']?></td>
  <td class="table-item"><?php echo $row ['platos_Nombre']?></td>
  <td class="table-item"><?php echo $row ['platos_Detalles']?></td>
  <td class="table-item"><?php echo $row ['turno_Tarde']?></td>
  <td class="table-item"><?php echo $row ['turno_Noche']?></td>
  <td class="table-item"><?php echo $row ['Platos_Precio']?></td>
  
                      </tr>
                      <?php } ?>
            </tbody>
            </table>
</div>
  <!--paginacion-->
              <nav aria-label="Page navigation example">
        <ul class="pagination pull-right">
          <li class="page-item
          <?php echo $_GET['pagina']<=1? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="reserva.php?pagina=<?php echo $_GET['pagina']-1 ?>">
            Anterior
            </a>
          </li>

          <?php for($i=0; $i<$paginas; $i++): ?>
          <li class="page-item 
          <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"
          >
            <a class="page-link" 
            href="reserva.php?pagina=<?php echo $i+1 ?>">
              <?php  echo $i+1; ?>
            </a>
          </li>
          <?php endfor ?>

          <li class="page-item
          <?php echo $_GET['pagina']>=$paginas? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="reserva.php?pagina=<?php echo $_GET['pagina']+1 ?>">
            Siguiente
            </a>
          </li>
        </ul>
    </nav>
</div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Realmente desea cerrar la sesión?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="logout.php">Salir</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script type="text/javascript">
    $( document ).ready(function() {
        refreshTableOrder();
    });
  </script>       
	

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
<script src="../js/menu.js"></script>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
</body>
</html>