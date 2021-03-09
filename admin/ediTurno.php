<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Turno</title>


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
  <h1>Actualización Turnos</h1>
   <a href="cliente.php"><span class="icon-home"></span></a>
<form action="ediTurno.php" method="POST"><!--formularios -->
   <input id="id_Turno" name="id_Turno" type="text" placeholder="INGRESE ID" onfocusout="petiTurno()"><!--labels -->
      <input id="tarde" name="Tarde" type="text" placeholder="T.FECHA-HORA">
      <input id="noche" name="Noche" type="text" placeholder="N.FECHA-HORA">
       <input id="FKclie" name="FK_cliente" type="text" placeholder="ID CLIENTE">

    <input id="boton" type="submit" onclick="eventoClicky();" value="Actualizar Registro" name="btnActualizar"><br>
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

$id_Turno= $_POST['id_Turno'];
$Tarde= $_POST['Tarde'];
$Noche= $_POST['Noche'];
$FK_cliente= $_POST['FK_cliente'];


//mysqli_query($conexion, "UPDATE turno set id_Turno='$id_Turno' where id_Turno='$id_Turno'") or die("Error al actualizar 1");
mysqli_query($conexion, "UPDATE turno set Tarde='$Tarde' where id_Turno='$id_Turno'") or die("tardeeeeeee");
//mysqli_query($conexion, "UPDATE turno set Noche='$Noche' where id_Turno='$id_Turno'") or die("nocheeeeeee");
mysqli_query($conexion, "UPDATE turno set FK_cliente='$FK_cliente' where id_Turno='$id_Turno'") or die("Error al actualizar 4");


mysqli_close($conexion);
//echo "Datos actualizados correctamente";
?>

<!--Al presionar TAB-->
<script type="text/javascript" src="../notis.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" >

function petiTurno(){


var ID=document.getElementById('id_Turno').value;

console.log(ID);
$.post("TraerDatosturno.php",{ID}).done(function (data) {

var arr_from_json = JSON.parse(data); //nombres ' ' igual que los id de arriba
document.getElementById('tarde').value=arr_from_json.Tarde;
document.getElementById('noche').value=arr_from_json.Noche;
document.getElementById('FKclie').value=arr_from_json.FK_cliente;
});

}
</script>
<script type="text/javascript" src="../notis.js"></script>
</body>
</html>