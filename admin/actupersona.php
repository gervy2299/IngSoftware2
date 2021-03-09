<?php //PARA VALIDAR
if(isset($_POST['submit'])){
  $ID=$_POST['id_Persona'];  
  $DNI=$_POST['DNI'];
  $NOMBRE=$_POST['Nombres'];  
  $APELLPAT=$_POST['Apell_Pat'];
  $APELLMAT=$_POST['Apell_Mat'];  
  $CORREO=$_POST['Correo'];
  $TELEFONO=$_POST['Telefono'];  
  $DIRECCION=$_POST['Direccion'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar Regsitro</title>
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
  border: 1.5px solid #47695A;
  margin: 20px auto;
}
input[type="submit"] {
  padding: 20px;
  color: #fff;
  background: #B2A326;
  width: 320px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #CDCE6B;
}
a{
	padding: 20px;
  color: #422C2C;
  width: 420px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
  text-decoration: none;
}	
#color{
  background: #5FCAA0;
}

	h1:hover{
color: #9B4F4F;
font-size: 2.5em;
}
</style>
    <link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
</head>
<body>
    <h1>Actualizar Persona</h1>
      <a href="index.php"><span class="icon-home"></span></a><br>
<form action="actupersona.php" method="POST"> <!--cambios en el idddddddddddddddddddddd cualquiera, y en el principal poner onfo...-->
	    <input id="id_Persona" name="id_Persona" type="text" placeholder="INGRESE SU ID" onfocusout="peticion()">
      <input id="DNI" name="DNI" type="text" placeholder="INGRESE SU DNI">
      <input id="nombre" name="Nombres" type="text" placeholder="INGRESE SUS NOMBRES">
      <input id="paterno" name="Apell_Pat" type="text" placeholder="INGRESE SU APELLIDO PATERNO">
      <input id="materno" name="Apell_Mat" type="text" placeholder="INGRESE SU APELLIDO MATERNO">
      <input id="correo" name="Correo" type="text" placeholder="INGRESE SU CORREO">
      <input id="telf"  name="Telefono" type="text" placeholder="INGRESE SU TELÉFONO">
      <input id="direc" name="Direccion" type="text" placeholder="INGRESE SUS DIRECCIÓN">

	<input type="submit" onclick="eventoClicky();" value="Actualizar Registro" name="btnActualizar"><br>
  <input type="submit" id="color" value="Verificar" name="submit"><br>
	<!--<input id="recar" type="submit" value="Recargar" name="btnActualizar"><br>-->
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

$conexion=mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

$id_Persona= $_POST['id_Persona'];
$DNI= $_POST['DNI'];
$Nombres= $_POST['Nombres'];
$Apell_Pat= $_POST['Apell_Pat'];
$Apell_Mat= $_POST['Apell_Mat'];
$Correo= $_POST['Correo'];
$Telefono= $_POST['Telefono'];
$Direccion= $_POST['Direccion'];

mysqli_query($conexion, "UPDATE persona set DNI='$DNI', Nombres='$Nombres', Apell_Pat='$Apell_Pat', Apell_Mat='$Apell_Mat', Correo='$Correo', Telefono='$Telefono', Direccion='$Direccion' where id_Persona='$id_Persona'") or die("Error al actualizar");
mysqli_close($conexion);
//echo "Datos actualizados correctamente";
?>


<!--Al presionar TAB-->
<script type="text/javascript" src="../notis.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" >

function peticion(){


var ID=document.getElementById('id_Persona').value;

console.log(ID);
$.post("TraerDatosPer.php",{ID}).done(function (data) {

var arr_from_json = JSON.parse(data); //nombres ' ' igual que los id de arriba
document.getElementById('DNI').value=arr_from_json.DNI;
document.getElementById('nombre').value=arr_from_json.Nombres;
document.getElementById('paterno').value=arr_from_json.Apell_Pat;
document.getElementById('materno').value=arr_from_json.Apell_Mat;
document.getElementById('correo').value=arr_from_json.Correo;
document.getElementById('telf').value=arr_from_json.Telefono;
document.getElementById('direc').value=arr_from_json.Direccion;

});

}
</script>
</body>
</html>