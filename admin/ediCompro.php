<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Comprobante</title>
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
  <h1>Actualización de Comprobante</h1>
   <a href="sales.php"><span class="icon-home"></span></a>
<form action="ediCompro.php" method="POST"><!--formularios -->
   <input id="id_Comprobante" name="id_Comprobante" type="text" placeholder="INGRESE ID" onfocusout="petiComprobante()"><!--labels -->
      <input id="fecha" name="Fecha" type="text" placeholder="FECHA">
    <!--  <input id="obse" name="Observacion" type="text" placeholder="OBSERVACIONES">-->
       <input id="idfactu" name="FK_Factura" type="text" placeholder="ID FACTURA">
        <input id="idbole" name="FK_Boleta" type="text" placeholder="ID BOLETA">
     
    <input id="boton" type="submit" onclick="eventoClicky();" value="Actualizar Registro" name="btnActualizar"><br>
 <?php 
      error_reporting(0); //para las notice
      ?>

</form>
<script type="text/javascript" src="../noti.js"></script>

<script type="text/javascript" src="../notis.js"></script>

<?php
$server="localhost";
$usuario="root";
$contraseña="funciona";
$bd="restomaria";

$conexion=mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

$id_Comprobante= $_POST['id_Comprobante'];
$Fecha= $_POST['Fecha'];
$Observacion= $_POST['Observacion'];
$FK_Factura= $_POST['FK_Factura'];
$FK_Boleta= $_POST['FK_Boleta'];



mysqli_query($conexion, "UPDATE comprobante set Fecha='$Fecha' where id_Comprobante='$id_Comprobante'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE comprobante set Observacion='$Observacion' where id_Comprobante='$id_Comprobante'") or die("Error al actualizar");
//mysqli_query($conexion, "UPDATE comprobante set FK_Factura='$FK_Factura' where id_Comprobante='$id_Comprobante'") or die("Error al actualizar");
//mysqli_query($conexion, "UPDATE comprobante set FK_Boleta='$FK_Boleta' where id_Comprobante='$id_Comprobante'") or die("Error al actualizar");

mysqli_close($conexion);
//echo "Datos actualizados correctamente";
?>

<!--Al presionar TAB-->
<script type="text/javascript" src="../notis.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" >

function petiComprobante(){


var ID=document.getElementById('id_Comprobante').value;

console.log(ID);
$.post("TraerDatosCompro.php",{ID}).done(function (data) {

var arr_from_json = JSON.parse(data); //nombres ' ' igual que los id de arriba
document.getElementById('fecha').value=arr_from_json.Fecha;
//document.getElementById('obse').value=arr_from_json.Observacion;
document.getElementById('idfactu').value=arr_from_json.FK_Factura;
document.getElementById('idbole').value=arr_from_json.FK_Boleta;
});

}
</script>

<script type="text/javascript" src="../notis.js"></script>




</body>
</html>
