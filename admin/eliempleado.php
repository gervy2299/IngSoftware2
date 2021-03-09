<?php //PARA VALIDAR
if(isset($_POST['eliem'])){
  $ID=$_POST['idEmpleado'];  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
	<title>Eliminar Empleado</title>
<style type="text/css">
    html{
      /*  background: #78D9AF;*/
      background: url(../recursos/banner3.jpg);
      }
	body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  text-align: center; 
}
/* Input Forms*/
input[type="text"]{
  outline: none;
  padding: 20px;
  display: block;
  width: 300px;
  border-radius: 3px;
  border: 1.5px solid #DE1D1D;
  margin: 20px auto;
}
input[type="submit"] {
  padding: 20px;
  color: #fff;
  background: #DC3040;
  width: 320px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #DB8084;
}
a{
  padding: 20px;
  color: #422C2C;
  background: url(recursos/princi.png);
  width: 420px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
  text-decoration: none;
} 
#recar{
  background: #5FCAA0;
}
h1:hover{
color: #9B4F4F;
font-size: 2.5em;
}
</style>

</head>
<body>
    <h1>Eliminar Empleado</h1>
       <a href="staff.php"><span class="icon-home"></span></a> 
<form action="eliempleado.php" method="POST">
		<input type="text" name="idEmpleado" placeholder="Ingresar ID"><br>
		<input type="submit" onclick="eventoClick();" value="ELIMINAR REGISTRO" name="btnEliminar"><br>
      <input id="recar" type="submit" value="Verificar" name="eliem"><br>
 <?php 
      include("validarPersona.php");
         error_reporting(0); //para las notice
      ?>
</form>
   
<?php
$server="localhost";
$usuario="root";
$contraseña="funciona";
$bd="restomaria";

$conexion=mysqli_connect($server, $usuario, $contraseña, $bd) or die ("error en la conexion");

$idEmpleado= $_POST['idEmpleado'];
mysqli_query($conexion, "DELETE from empleado where idEmpleado='$idEmpleado'") or die ("Error al eliminar los datos");

mysqli_close($conexion);
//echo "Datos eliminados correctamente";

?>
<script type="text/javascript" src="../notis.js"></script>
	
</body>
</html>
