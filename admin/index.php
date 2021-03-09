<?php 
  include("../functions.php");

  if((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])) ) 
    header("Location: login.php");

  if($_SESSION['user_level'] != "admin")
    header("Location: login.php");

  // echo $_SESSION['uid'];
  //echo $_SESSION['username'];
  //echo $_SESSION['user_level'];
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
	<title>Panel de Control</title>
	<!--<link rel="stylesheet" href="./style.css">  ESTILO-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">	
<link rel="stylesheet" type="text/css" href="../estiloss/estilasos.css">
<link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">


   <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
.btn{
width: 230px;
}
.btn:hover{
  color: #131212;
}
.column__title{
	font-size: 1.3em; 
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
		<li class="menu__item"><a href="../index.php" class="menu__link">Inicio</a></li>
		<li class="menu__item"><a href="../nosotros.php" class="menu__link">Nosotros</a></li>
		<li class="menu__item"><a href="../galeria.php" class="menu__link">Galeria</a></li>
		<li class="menu__item"><a href="../contacto.php" class="menu__link">Reserva</a></li>
	<li class="menu__item"><a href="../menu.php" class="menu__link">Menú</a></li>
		<li class="menu__item"><a href="staff" class="menu__link">Empleado</a></li>
	<li class="menu__item"><a href="../admin" class="menu__link menu__link--select">Administrador</a></li>

	</ul>
	<div class="social-icon">
		<a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
		<a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
		<a href="" class="social-icon__link"><span class="icon-mail"></span></a>
	</div>

	</div>
</nav>
<section class="banner">
	<img src="../recursos/banner3.jpg" alt="" class="banner__img">

</section>
<!-- <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
       <span class="icon-arrow-left">
      </button>  -->

     
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
          <a class="nav-link" href="menu.php">
            <i class="fas fa-fw fa-utensils"></i>
            <span>Menú</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sales.php">
<span class="icon-dolar"></span>
            <span>Ventas</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="staff.php">
     <span class="icon-user"></span>
            <span>Empleados</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cliente.php">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Clientes</span>
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
          <!-- Breadcrumbs-->
          <!-- Page Content -->
          <h1>Panel de Administración</h1>
          <hr>
          <p class="column__title">Vista General del Sistema.</p> 
            <p class="column__title">REGISTRO DE PERSONA</p><br>
            <a href="addpersona.php" class="btn">AGREGAR PERSONA</a>
            <a href="../admin/actupersona.php" class="btn">EDITAR PERSONA</a>
<a href="../admin/elipersona.php" class="btn">ELIMINAR PERSONA</a> <br> <br> 
    <!--BUSCARRRRRRRRRRRRRRRRRR-->
      <div class="panel-body">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
              <b>Nombre: </b><input type="text" id="campo" name="campo"/>
              <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info"/>
            </form>
    </div>
    <br> 
    <div>
          <a href="../reporte_persona.php" class="btn btn-danger">PDF</a>
<a href="../dexcel_persona.php" class="btn btn-success">XLS</a>
    </div>
<div class="row table-responsive">
  <?php
   require '../database.php';
   $where = "";
   if(!empty($_POST))
   {
    $valor = $_POST['campo'];
    if(!empty($valor)){
      $where = "Where Nombres LIKE '%$valor'";
    }
   } 
$sql ="SELECT * FROM persona $where";
   $resultado  = $mysqli->query($sql);
?>
  <div id="tabla1">
            <table class="table table-striped">
              <thead>
           <tr>
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>DNI</b></td>
    <td class="encabezado"><b>Nombres</b></td>
    <td class="encabezado"><b>Apellidos Paterno</b></td>
    <td class="encabezado"><b>Apellidos Materno</b></td>
     <td class="encabezado"><b>Correo</b></td>
    <td class="encabezado"><b>Teléfono</b></td>
    <td class="encabezado"><b>Dirección</b></td>

</tr>
              </thead>
  <tbody>
     <?php while($row =$resultado->fetch_array(MYSQLI_ASSOC)){?>  
                      <tr>
                        <td class="table-item"><?php echo $row['id_Persona']; ?></td>
                        <td class="table-item"><?php echo $row['DNI']; ?></td>
                        <td class="table-item"><?php echo $row['Nombres']; ?></td>
                        <td class="table-item"><?php echo $row['Apell_Pat']; ?></td>
                        <td class="table-item"><?php echo $row['Apell_Mat']; ?></td>
                        <td class="table-item"><?php echo $row['Correo']; ?></td>
                        <td class="table-item"><?php echo $row['Telefono'];?></td>
                        <td class="table-item"><?php echo $row['Direccion'];?></td>
                      </tr>
                      <?php } ?>
            </tbody>
            </table>
             </div>
           
          </div>
        </div>
         <p class="column__title">REGISTRO DE RESERVA CLIENTE</p>
 <a href="../reporte_resecli.php" class="btn btn-danger">PDF</a>
<a href="../dexcel_rececli.php" class="btn btn-success">XLS</a> 
    

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

$sql_registros="SELECT * FROM reservacli ORDER BY Id ASC LIMIT $iniciar,$regxpag";
$result=$mysqli->query($sql_registros);

  ?>

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

              <nav aria-label="Page navigation example">
        <ul class="pagination pull-right">
          <li class="page-item
          <?php echo $_GET['pagina']<=1? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
            Anterior
            </a>
          </li>

          <?php for($i=0; $i<$paginas; $i++): ?>
          <li class="page-item 
          <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"
          >
            <a class="page-link" 
            href="index.php?pagina=<?php echo $i+1 ?>">
              <?php  echo $i+1; ?>
            </a>
          </li>
          <?php endfor ?>

          <li class="page-item
          <?php echo $_GET['pagina']>=$paginas? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">
            Siguiente
            </a>
          </li>
        </ul>
    </nav>
</div>
              
  <p class="column__title">REGISTRO DE RESERVA EMPLEADOS</p>
   <a href="../reporte_reseemple.php" class="btn btn-danger">PDF</a>
<a href="../dexcel_receemple.php" class="btn btn-success">XLS</a> 

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

              <nav aria-label="Page navigation example">
        <ul class="pagination pull-right">
          <li class="page-item
          <?php echo $_GET['pagina']<=1? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
            Anterior
            </a>
          </li>

          <?php for($i=0; $i<$paginas; $i++): ?>
          <li class="page-item 
          <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"
          >
            <a class="page-link" 
            href="index.php?pagina=<?php echo $i+1 ?>">
              <?php  echo $i+1; ?>
            </a>
          </li>
          <?php endfor ?>

          <li class="page-item
          <?php echo $_GET['pagina']>=$paginas? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">
            Siguiente
            </a>
          </li>
        </ul>
    </nav>
</div>
            
<p class="column__title">REGISTRO DE ESPECIALIDADES</p>
 <a href="../reporte_especi.php" class="btn btn-danger">PDF</a>
<a href="../dexcel_espe.php" class="btn btn-success">XLS</a> <br> <br> 

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

$sql_registros="SELECT * FROM datespecilidades ORDER BY Id ASC LIMIT $iniciar,$regxpag";
$result=$mysqli->query($sql_registros);

  ?>

 <div id="tabla1">
   <table>
              <thead>
           <tr>
      <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>Nombre</b></td>
    <td class="encabezado"><b>Detalles</b></td>
    <td class="encabezado"><b>Platos</b></td>
    <td class="encabezado"><b>Detalles</b></td>
    <td class="encabezado"><b>Precio</b></td>
</tr>
              </thead>

  <tbody>
              <?php while($row =$result->fetch_array(MYSQLI_ASSOC)){?>
                   <tr>
  <td class="table-item"><?php echo $row ['Id']?></td>
  <td class="table-item"><?php echo $row ['Nombre']?></td>
  <td class="table-item"><?php echo $row ['Detalles']?></td>
  <td class="table-item"><?php echo $row ['Plato']?></td>
  <td class="table-item"><?php echo $row ['Platos_Detalles']?></td>
   <td class="table-item"><?php echo $row ['Platos_Precio']?></td>
</tr>
                      <?php } ?>
            </tbody>
            </table>
</div>

              <nav aria-label="Page navigation example">
        <ul class="pagination pull-right">
          <li class="page-item
          <?php echo $_GET['pagina']<=1? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
            Anterior
            </a>
          </li>

          <?php for($i=0; $i<$paginas; $i++): ?>
          <li class="page-item 
          <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>"
          >
            <a class="page-link" 
            href="index.php?pagina=<?php echo $i+1 ?>">
              <?php  echo $i+1; ?>
            </a>
          </li>
          <?php endfor ?>

          <li class="page-item
          <?php echo $_GET['pagina']>=$paginas? 'disabled':'' ?>
          ">
            <a class="page-link" 
            href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">
            Siguiente
            </a>
          </li>
        </ul>
    </nav>
       
  <p class="column__title">REGISTRO DE RESERVAS</p>
 <div id="tabla1">
          <table>
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>Código de Mesa</b></td>
    <td class="encabezado"><b>Código de Delivery</b></td>
    <td class="encabezado"><b>Id Turno</b></td>
    <td class="encabezado"><b>Id Empleado</b></td>
     <td class="encabezado"><b>Id Comprobante</b></td>
</tr>

<?php
$sql="SELECT * from reserva";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
  <td class="table-item" class="table-item"><?php echo $mostrar ['id_Reserva']?></td>
  <td class="table-item" class="table-item"><?php echo $mostrar ['Cod_Mesa']?></td>
  <td class="table-item" class="table-item"><?php echo $mostrar ['Cod_Delivery']?></td>
  <td class="table-item" class="table-item"><?php echo $mostrar ['FK_Turno']?></td>
  <td class="table-item" class="table-item"><?php echo $mostrar ['FK_Empleado']?></td>
   <td class="table-item" class="table-item"><?php echo $mostrar ['FK_Comprobante']?></td>
</tr>
<?php
}
?>
</table>
</div>
  <p class="column__title">Cliente</p>
 <div id="tabla1">
          <table>
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>Username</b></td>
    <td class="encabezado"><b>Password</b></td>
</tr>

<?php
$sql="SELECT * from tbl_staff";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
  <td class="table-item"><?php echo $mostrar ['staffID']?></td>
  <td class="table-item"><?php echo $mostrar ['username']?></td>
  <td class="table-item"><?php echo $mostrar ['password']?></td>
</tr>
<?php
}
?>
</table>
</div>
  
  <p class="column__title">REGISTRO DE CLIENTES</p>
 <div id="tabla1">
          <table>
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>DNI</b></td>
    <td class="encabezado"><b>Clientes</b></td>
    <td class="encabezado"><b>Correo</b></td>
    <td class="encabezado"><b>Teléfono</b></td>
    <td class="encabezado"><b>Dirección</b></td>
     <td class="encabezado"><b>Cantidad de Comensales</b></td>
</tr>

<?php
$sql="SELECT * from datoscliente";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
  <td class="table-item"><?php echo $mostrar ['cliente_idcliente']?></td>
  <td class="table-item"><?php echo $mostrar ['persona_DNI']?></td>
  <td class="table-item"><?php echo $mostrar ['Cliente']?></td>
  <td class="table-item"><?php echo $mostrar ['Correo']?></td>
  <td class="table-item"><?php echo $mostrar ['Telefono']?></td>
   <td class="table-item"><?php echo $mostrar ['Direccion']?></td>
   <td class="table-item"><?php echo $mostrar ['Can_Comensales']?></td>
</tr>
<?php
}
?>
</table>
</div>
  <p class="column__title">REGISTRO DE EMPLEADOS</p>
 <div id="tabla1">
          <table>
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>DNI</b></td>
    <td class="encabezado"><b>Categoria</b></td>
     <td class="encabezado"><b>Empleado</b></td>
    <td class="encabezado"><b>Correo</b></td>
    <td class="encabezado"><b>Teléfono</b></td>
     <td class="encabezado"><b>Dirección</b></td>
</tr>

<?php
$sql="SELECT * from datosempleado";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
  <td class="table-item"><?php echo $mostrar ['Id']?></td>
  <td class="table-item"><?php echo $mostrar ['DNI']?></td>
  <td class="table-item"><?php echo $mostrar ['Categoria']?></td>
  <td class="table-item"><?php echo $mostrar ['Empleado']?></td>
  <td class="table-item"><?php echo $mostrar ['Correo']?></td>
  <td class="table-item"><?php echo $mostrar ['Telefono']?></td>
   <td class="table-item"><?php echo $mostrar ['Direccion']?></td>
</tr>
<?php
}
?>
</table>
</div> <p class="column__title">REGISTRO DE FACTURAS</p>
 <div id="tabla1">
          <table>
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>Razon Social</b></td>
    <td class="encabezado"><b>Cantidad</b></td>
    <td class="encabezado"><b>Precio</b></td>
    <td class="encabezado"><b>IGV</b></td>
     <td class="encabezado"><b>Total</b></td>
</tr>

<?php
$sql="SELECT * from factura";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
  <td class="table-item"><?php echo $mostrar ['id_Factura']?></td>
  <td class="table-item"><?php echo $mostrar ['Razon_Social']?></td>
  <td class="table-item"><?php echo $mostrar ['Cantidad']?></td>
  <td class="table-item"><?php echo $mostrar ['Precio']?></td>
  <td class="table-item"><?php echo $mostrar ['IGV']?></td>
   <td class="table-item"><?php echo $mostrar ['Total']?></td>
</tr>
<?php
}
?>
</table>
</div>
	  <p class="column__title">REGISTRO DE BOLETAS</p>
 <div id="tabla1">
          <table>
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>Fecha</b></td>
    <td class="encabezado"><b>Cliente</b></td>
    <td class="encabezado"><b>Cantidad</b></td>
    <td class="encabezado"><b>Precio Unitario</b></td>
    <td class="encabezado"><b>Total</b></td>
   <td class="encabezado"><b>Turno Tarde</b></td>
   <td class="encabezado"><b>Turno Noche</b></td>
   <td class="encabezado"><b>Cantidad de Comensales</b></td>
</tr>

<?php
$sql="SELECT * from preboleta";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
  <td class="table-item"><?php echo $mostrar ['Id']?></td>
  <td class="table-item"><?php echo $mostrar ['Fecha']?></td>
  <td class="table-item"><?php echo $mostrar ['Cliente']?></td>
  <td class="table-item"><?php echo $mostrar ['Cantidad']?></td>
  <td class="table-item"><?php echo $mostrar ['Precio_Uni']?></td>
  <td class="table-item"><?php echo $mostrar ['Total']?></td>
  <td class="table-item"><?php echo $mostrar ['Tarde']?></td>
  <td class="table-item"><?php echo $mostrar ['Noche']?></td>
  <td class="table-item"><?php echo $mostrar ['Can_Comensales']?></td>
</tr>
<?php
}
?>
</table>
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
            <h5 class="modal-title" id="exampleModalLabel">¿Preparado para partir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Cerrar Sesión</a>
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

    <script type="text/javascript">

    $( document ).ready(function() {
        refreshTableOrder();
    });

    function refreshTableOrder() {
      $( "#tblBodyCurrentOrder" ).load( "displayorder.php?cmd=display" );
    }

    //refresh order current list every 3 secs
    setInterval(function(){ refreshTableOrder(); }, 3000);

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

	      <script>
  $('#confirm-delete').on('show.bs.modal', function(e){
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    $('.debug-url').html('Delete URL: <strong>'+$(this).find('.btn-ok').attr('href')+'</strong>');
  });
</script> 
</body>
</html>