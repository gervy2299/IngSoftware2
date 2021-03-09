<?php //PARA VALIDAR
if(isset($_POST['agrecli'])){
  $ID=$_POST['idcliente'];  
  $CAN=$_POST['Can_Comensales'];
  $FKPER=$_POST['FK_Persona'];  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Clientes</title>
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
#colo{
  background: #48BCBB;
} 
    </style>

</head>
<body>
  <h1>Actualización de Clientes</h1>
  <a href="cliente.php"><span class="icon-home"></span></a>
<form action="edicliente.php" method="POST"><!--formularios -->
   <input id="idcliente" name="idcliente" type="text" placeholder="INGRESE ID" onfocusout="cionCliente()"><!--labels -->
      <input id="can" name="Can_Comensales" type="text" placeholder="INGRESE CANT DE COMENSALES">
      <input id="fkper" name="FK_Persona" type="text" placeholder="INGRESE ID PERSONA">
    <input id="boton" type="submit" onclick="eventoClicky();" value="Actualizar Registro" name="btnActualizar"><br>
          <input id="colo" type="submit" value="Verificar" name="agrecli"><br>
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

$idcliente= $_POST['idcliente'];
$Can_Comensales= $_POST['Can_Comensales'];
$FK_Persona= $_POST['FK_Persona'];

mysqli_query($conexion, "UPDATE cliente set idcliente='$idcliente' where idcliente='$idcliente'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE cliente set Can_Comensales='$Can_Comensales' where idcliente='$idcliente'") or die("Error al actualizar");
mysqli_query($conexion, "UPDATE cliente set FK_Persona='$FK_Persona' where idcliente='$idcliente'") or die("Error al actualizar");
mysqli_close($conexion);
//echo "Datos actualizados correctamente";

?>

<!--Al presionar TAB-->
<script type="text/javascript" src="../confirmacion.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript" >

function cionCliente(){


var ID=document.getElementById('idcliente').value;

console.log(ID);
$.post("TraerDatoCliente.php",{ID}).done(function (data) {

var arr_from_json = JSON.parse(data); //nombres ' ' igual que los id de arriba
document.getElementById('can').value=arr_from_json.Can_Comensales;
document.getElementById('fkper').value=arr_from_json.FK_Persona;
});

}
</script>

<script type="text/javascript" src="../confirmacion.js"></script>


</body>
</html>
