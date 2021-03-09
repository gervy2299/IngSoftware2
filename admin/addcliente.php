<?php 
	include("../functions.php");
	if((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])) ) 
		header("Location: login.php");
	if($_SESSION['user_level'] != "admin")
		header("Location: login.php");
?>
<?php //PARA VALIDAR
if(isset($_POST['agrecli'])){
  $ID=$_POST['idcliente'];  
  $CAN=$_POST['Can_Comensales'];
  $FKPER=$_POST['FK_Persona'];  
}
?>
<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['idcliente']) && !empty($_POST['Can_Comensales']) && !empty($_POST['FK_Persona'])) {
    $sql = "INSERT INTO cliente (idcliente, Can_Comensales, FK_Persona) 
    VALUES (:idcliente, :Can_Comensales, :FK_Persona)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idcliente', $_POST['idcliente']);
    $stmt->bindParam(':Can_Comensales', $_POST['Can_Comensales']);
    $stmt->bindParam(':FK_Persona', $_POST['FK_Persona']);
    if ($stmt->execute()) {
      $message = 'Usuario registrado Satisfactoriamente!!!';
    } else {
      $message = 'Disculpe, se presento un error!!!';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="css/style.css">
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
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Registrar Cliente</h1>
     <a href="cliente.php"><span class="icon-home"></span></a> <br>
    <form action="addcliente.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input name="idcliente" type="text" placeholder="INGRESE SU ID">
      <input name="Can_Comensales" type="text" placeholder="INGRESE CANTIDAD DE COMENSALES">
      <input name="FK_Persona" type="text" placeholder="INGRESE SU ID PERSONA">
      <input type="submit" name="agrecli" value="GENERAR REGISTRO">
      
      <?php 
      include("validarPersona.php");
      ?>
    </form>
  </body>
</html>