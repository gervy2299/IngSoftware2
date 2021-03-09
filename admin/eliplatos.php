<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ELIMINACIÓN DE PLATOS</title>

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
  background: #E3213C;
  width: 320px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #DB4E5F;
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
	 <h1>ELIMINAR PLATOS</h1>
    <a href="menu.php"><span class="icon-home"></span></a>
	<form action="eliplatos.php" method="POST">
		<input type="text" name="id_Platos" placeholder="INGRESE ID"><br>
		<input id="boton" type="submit" onclick="eventoClick();" value="Eliminar Registro" name="btnEliminar"><br>
     <?php 
      error_reporting(0); //para las notice
      ?>
</form>

<script type="text/javascript" src="../notis.js"></script>
</body>
</html>
<?php
$server="localhost";
$usuario="root";
$contraseña="funciona";
$bd="restomaria";
$conexion=mysqli_connect($server, $usuario, $contraseña, $bd) or die ("error en la conexion");
$id_Platos= $_POST['id_Platos'];
mysqli_query($conexion, "DELETE from platos where id_Platos='$id_Platos'") or die ("Error al eliminar los datos");
mysqli_close($conexion);
//echo "Datos eliminados correctamente";
?>