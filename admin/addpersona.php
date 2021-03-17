<?php 
	include("../functions.php");
	if((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])) ) 
		header("Location: login.php");
	if($_SESSION['user_level'] != "admin")
		header("Location: login.php");
?>
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
<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['id_Persona']) && !empty($_POST['DNI']) && !empty($_POST['Nombres']) && !empty($_POST['Apell_Pat']) && !empty($_POST['Apell_Mat']) && !empty($_POST['Correo']) && !empty($_POST['Telefono']) && !empty($_POST['Direccion'])) {
    $sql = "INSERT INTO persona (id_Persona, DNI, Nombres, Apell_Pat, Apell_Mat, Correo, Telefono, Direccion) 
    VALUES (:id_Persona, :DNI, :Nombres, :Apell_Pat, :Apell_Mat, :Correo, :Telefono, :Direccion)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_Persona', $_POST['id_Persona']);
    $stmt->bindParam(':DNI', $_POST['DNI']);
    $stmt->bindParam(':Nombres', $_POST['Nombres']);
    $stmt->bindParam(':Apell_Pat', $_POST['Apell_Pat']);
    $stmt->bindParam(':Apell_Mat', $_POST['Apell_Mat']);
    $stmt->bindParam(':Correo', $_POST['Correo']);
    $stmt->bindParam(':Telefono', $_POST['Telefono']);
    $stmt->bindParam(':Direccion', $_POST['Direccion']);
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
    <link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Agregar Persona</title>
    <link rel="stylesheet" href="css/style.css">
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
    <h1>Agregar Persona</h1>
     <a href="index.php"><span class="icon-home"></span></a> <br>


    <form action="addpersona.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input name="id_Persona" type="text" placeholder="INGRESE SU ID">
      <input name="DNI" type="text" placeholder="INGRESE SU DNI">
      <input name="Nombres" type="text" placeholder="INGRESE SUS NOMBRES">
      <input name="Apell_Pat" type="text" placeholder="INGRESE SU APELLIDO PATERNO">
      <input name="Apell_Mat" type="text" placeholder="INGRESE SU APELLIDO MATERNO">
      <input name="Correo" type="text" placeholder="INGRESE SU CORREO">
      <input name="Telefono" type="text" placeholder="INGRESE SU TELÉFONO">
      <input name="Direccion" type="text" placeholder="INGRESE SUS DIRECCIÓN">      
      <input type="submit" name="submit" value="GENERAR REGISTRO">
      <?php 
      include("validarPersona.php");
      ?>
    </form>
  </body>
</html>