<?php 
  include("../functions.php");

  if((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])) ) 
    header("Location: login.php");

  if($_SESSION['user_level'] != "admin")
    header("Location: login.php");

?>
<?php
$conexion=mysqli_connect('localhost' ,'root','funciona','restomaria'); 
 //echo "CONECTADO";
?>
<?php
   require '../database.php';

   $where = "";
   if(!empty($_POST))
   {
    $valor = $_POST['campo'];
    if(!empty($valor)){
      $where = "Where cliente_idcliente LIKE '%$valor'";
    }
   }
   $sql ="SELECT * FROM datoscliente $where";
   $resultado = $mysqli->query($sql);
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
  <title>Administración de Clientes</title>

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
margin: 0px 20px;
}
.btn:hover{
  color: #131212;
}
.column__title{
  font-size: 1.3em; 
}
</style>
</head>
<body id="page-top">
<!--  <a href="staff" >Empleado</a>
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
  <li class="menu__item"><a href="admin" class="menu__link menu__link--select">Administrador</a></li>

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
          <!-- Page Content -->
          <h1>Administración de Clientes</h1> <!--TITULOOOOOOOO-->
          <hr>
          <div class="row">
            <div class="">
              <div class="">
                  <!--TABLA DE DATOSSSS-->
                    <p class="column__title">CLIENTES</p>
                    <a href="../admin/addcliente.php" class="btn">AGREGAR CLIENTE</a>
<a href="../admin/edicliente.php" class="btn">EDITAR CLIENTE</a> 
<a href="../admin/elicliente.php" class="btn">ELIMINAR CLIENTE</a> <br> <br> 

 <a href="../reporte_cliente.php" class="btn btn-danger">PDF</a>
<a href="../dexcel_cliente.php" class="btn btn-success">XLS</a> <br> <br> 

 <!--BUSCARRRRRRRRRRRRRRRRRR-->
    <div class="row">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
              <b>....ID: </b><input type="text" id="campo" name="campo"/>
              <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info"/>
            </form>
    </div><br>
<div class="row table-responsive">
 <div id="tabla1">
          <table class="table table-striped">
              <thead>
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>Id</b></td>
    <td class="encabezado"><b>DNI</b></td>
    <td class="encabezado"><b>Clientes</b></td>
    <td class="encabezado"><b>Correo</b></td>
    <td class="encabezado"><b>Teléfono</b></td>
    <td class="encabezado"><b>Dirección</b></td>
     <td class="encabezado"><b>Nº Comensales</b></td>
</tr>  </thead>
<tbody>
              <?php while($row =$resultado->fetch_array(MYSQLI_ASSOC)){?>
                      <tr>
                        <td class="table-item"><?php echo $row['cliente_idcliente']; ?></td>
                        <td class="table-item"><?php echo $row['persona_DNI']; ?></td>
                        <td class="table-item"><?php echo $row['Cliente']; ?></td>
                        <td class="table-item"><?php echo $row['Correo']; ?></td>
                        <td class="table-item"><?php echo $row['Telefono']; ?></td>
                        <td class="table-item"><?php echo $row['Direccion'];?></td>
                         <td class="table-item"><?php echo $row['Can_Comensales'];?></td>
                      </tr>
                      <?php } ?>
            </tbody>
</table>
</div>
<p class="column__title">..TURNOS</p>
<a href="../admin/addTurno.php" class="btn">AGREGAR TURNO</a>
<a href="../admin/ediTurno.php" class="btn">EDITAR TURNO</a>
<a href="../admin/eliTurno.php" class="btn">ELIMINAR TURNO</a><br> <br> 

 <a href="../reporte_turnos.php" class="btn btn-danger">PDF</a>
<a href="../dexcel_turno.php" class="btn btn-success">XLS</a> <br> <br> 
 <div id="tabla1">
          <table>
 
<tr>
    <!--imprime en el navegador-->
    <td class="encabezado"><b>ID</b></td>
    <td class="encabezado"><b>Tarde</b></td>
    <td class="encabezado"><b>Noche</b></td>
     <td class="encabezado"><b>ID Cliente</b></td>

</tr>
<?php
$sql="SELECT * from turno";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
  <td class="table-item"><?php echo $mostrar ['id_Turno']?></td>
  <td class="table-item"><?php echo $mostrar ['Tarde']?></td>
  <td class="table-item"><?php echo $mostrar ['Noche']?></td>
  <td class="table-item"><?php echo $mostrar ['FK_cliente']?></td>

</tr>
<?php
}
?>
</table>
</div>
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

    <!-- Logout Modal CERRAR SESION-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Deseas cerrar tu sesión?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
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