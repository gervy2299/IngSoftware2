<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Platos</title>
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
   <h1>ACTUALIZAR PLATOS</h1>
    <a href="menu.php"><span class="icon-home"></span></a>
<form action="ediplatos.php" method="POST"><!--formularios -->
   <input id="id_Platos" name="id_Platos" type="text" placeholder="INGRESE ID" onfocusout="ciPlatos()">
      <input id="nom" name="Nombre" type="text" placeholder="INGRESE NOMBRE">
      <input id="detall" name="Detalles" type="text" placeholder="INGRESE DETALLE">
      <input id="prec" name="Precio" type="text" placeholder="INGRESE PRECIO">
      <input id="espe" name="FK_Especialidades" type="text" placeholder="INGRESE ID ESPECIALIDAD">

    <input id="boton" type="submit" onclick="eventoClicky();" value="Actualizar Registro" name="btnActualizar"><br>
    <!--  <h4 id="tab"><a href="menu.php">Ver tablas</a></h4>-->
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

$id_Platos= $_POST['id_Platos'];
$Nombre= $_POST['Nombre'];
$Detalles= $_POST['Detalles'];
$Precio= $_POST['Precio'];
$FK_Especialidades= $_POST['FK_Especialidades'];


mysqli_query($conexion, "UPDATE platos set id_Platos='$id_Platos' where id_Platos='$id_Platos'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE platos set Nombre='$Nombre' where id_Platos='$id_Platos'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE platos set Detalles='$Detalles' where id_Platos='$id_Platos'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE platos set Precio='$Precio' where id_Platos='$id_Platos'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE platos set FK_Especialidades='$FK_Especialidades' where id_Platos='$id_Platos'") or die("Error al actualizar");

mysqli_close($conexion);
//echo "Datos actualizados correctamente";
?>
<!--Al presionar TAB-->
<script type="text/javascript" src="../confirmacion.js"></script>
<script type="text/javascript" src="../confirmacion.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" >

function ciPlatos(){
var ID=document.getElementById('id_Platos').value;
console.log(ID);
$.post("TraerDatosPlato.php",{ID}).done(function (data) {
var arr_from_json = JSON.parse(data); //nombres ' ' igual que los id de arriba
document.getElementById('nom').value=arr_from_json.Nombre;
document.getElementById('detall').value=arr_from_json.Detalles;
document.getElementById('prec').value=arr_from_json.Precio;
document.getElementById('espe').value=arr_from_json.FK_Especialidades;
});

}

</script>


<script type="text/javascript" src="../confirmacion.js"></script>
<script type="text/javascript" src="../notis.js"></script>
</body>
</html>
