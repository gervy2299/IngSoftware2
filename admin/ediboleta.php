<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Boleta</title>
   <link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
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
  border: 1px solid #BAD7CA;
  margin: 20px auto;
}


input[type="submit"] {
  padding: 20px;
  color: #fff;
  background: #28902A;
  width: 320px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #57B26A;
}

/* Header */
header {
  border-bottom: 2px solid #eee;
  padding: 20px 0;
  margin-bottom: 10px;
  width: 100%;
  text-align: center;

}
h1:hover{
color: #9B4F4F;
font-size: 2.5em;
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
    </style>
</head>
<body>
  <h1> Actualización de Boletas</h1>
      <a href="sales.php"><span class="icon-home"></span></a>
<form action="ediboleta.php" method="POST"><!--formularios -->
   <input id="id_Boleta" name="id_Boleta" type="text" placeholder="INGRESE ID" onfocusout="peticionBol()"><!--labels -->
      <input id="can" name="Cantidad" type="text" placeholder="INGRESE CANT DE COMENSALES">
      <input id="preci" name="Precio_Uni" type="text" placeholder="PRECIO">
   <!--  <input id="tota" name="Total" type="text" placeholder="TOTAL">-->
     
    <input id="boton" type="submit" onclick="eventoClicky();" value="Actualizar Registro" name="btnActualizar">  <br>    
 <?php 
      error_reporting(0); //para las notice
      ?>

</form>

<?php
$server="localhost";
$usuario="root";
$contraseña="funciona";
$bd="restomaria";

$conexion=mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

$id_Boleta= $_POST['id_Boleta'];
$Cantidad= $_POST['Cantidad'];
$Precio_Uni= $_POST['Precio_Uni'];
$Total= $_POST['Cantidad']*$_POST['Precio_Uni'];



mysqli_query($conexion, "UPDATE boleta set id_Boleta='$id_Boleta' where id_Boleta='$id_Boleta'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE boleta set Cantidad='$Cantidad' where id_Boleta='$id_Boleta'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE boleta set Precio_Uni='$Precio_Uni' where id_Boleta='$id_Boleta'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE boleta set Total='$Total' where id_Boleta='$id_Boleta'") or die("Error al actualizar");


mysqli_close($conexion);
//echo "Datos actualizados correctamente";

?>
 <!--Al presionar TAB-->

<script type="text/javascript" src="../confirmacion.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" >

function peticionBol(){


var ID=document.getElementById('id_Boleta').value;

console.log(ID);
$.post("TraerDatosBole.php",{ID}).done(function (data) {

var arr_from_json = JSON.parse(data); //nombres ' ' igual que los id de arriba
document.getElementById('can').value=arr_from_json.Cantidad;
document.getElementById('preci').value=arr_from_json.Precio_Uni;
document.getElementById('tota').value=arr_from_json.Total;
});

}
</script>


<script type="text/javascript" src="../confirmacion.js"></script>

</body>
</html>
