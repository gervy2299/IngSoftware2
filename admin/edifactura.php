<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Factura</title>
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
  <h1>Actualización de Facturas</h1>
       <a href="sales.php"><span class="icon-home"></span></a>
<form action="edifactura.php" method="POST"><!--formularios -->
   <input id="id_Factura" name="id_Factura" type="text" placeholder="INGRESE ID" onfocusout="petiFactu()"><!--labels -->
      <input id="razso" name="Razon_Social" type="text" placeholder="RAZON SOCIAL">
      <input id="can" name="Cantidad" type="text" placeholder="CANTIDAD">
       <input id="prec" name="Precio" type="text" placeholder="PRECIO">
    <!-- <input id="label" name="IGV" type="text" placeholder="IGV">
     <input id="label" name="Total" type="text" placeholder="TOTAL">-->

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

$id_Factura= $_POST['id_Factura'];
$Razon_Social= $_POST['Razon_Social'];
$Cantidad= $_POST['Cantidad'];
$Precio= $_POST['Precio'];
$IGV=($_POST['Cantidad']*$_POST['Precio'])*0.18;
$Total=$IGV+($_POST['Cantidad']*$_POST['Precio']);


mysqli_query($conexion, "UPDATE factura set id_Factura='$id_Factura' where id_Factura='$id_Factura'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE factura set Razon_Social='$Razon_Social' where id_Factura='$id_Factura'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE factura set Cantidad='$Cantidad' where id_Factura='$id_Factura'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE factura set Precio='$Precio' where id_Factura='$id_Factura'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE factura set IGV='$IGV' where id_Factura='$id_Factura'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE factura set Total='$Total' where id_Factura='$id_Factura'") or die("Error al actualizar");


mysqli_close($conexion);
//echo "Datos actualizados correctamente";
?>

<!--Al presionar TAB-->
<script type="text/javascript" src="../notis.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" >

function petiFactu(){


var ID=document.getElementById('id_Factura').value;

console.log(ID);
$.post("TraerDatosFactu.php",{ID}).done(function (data) {

var arr_from_json = JSON.parse(data); //nombres ' ' igual que los id de arriba
document.getElementById('razso').value=arr_from_json.Razon_Social;
document.getElementById('can').value=arr_from_json.Cantidad;
document.getElementById('prec').value=arr_from_json.Precio;
});

}
</script>

</body>
</html>
