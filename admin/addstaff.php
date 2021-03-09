<?php 
	include("../functions.php");
	if((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])) ) 
		header("Location: login.php");
	if($_SESSION['user_level'] != "admin")
		header("Location: login.php");
?>
<?php //PARA VALIDAR
if(isset($_POST['agreemple'])){
  $ID=$_POST['idEmpleado'];  
  $CATE=$_POST['Categoria'];
  $FKPER=$_POST['FK_Persona'];
  $FKUSER=$_POST['FK_tbl_staff'];  
}
?>
<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['idEmpleado']) && !empty($_POST['Categoria']) && !empty($_POST['FK_Persona']) && !empty($_POST['FK_tbl_staff'])  ) {
    $sql = "INSERT INTO empleado (idEmpleado, Categoria, FK_Persona, FK_tbl_staff) 
    VALUES (:idEmpleado, :Categoria, :FK_Persona, :FK_tbl_staff)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idEmpleado', $_POST['idEmpleado']);
    $stmt->bindParam(':Categoria', $_POST['Categoria']);
    $stmt->bindParam(':FK_Persona', $_POST['FK_Persona']);
    $stmt->bindParam(':FK_tbl_staff', $_POST['FK_tbl_staff']);
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
    <title>Registrar Empleado</title>
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
    <h1>Registrar Persona</h1>
     <a href="staff.php"><span class="icon-home"></span></a> 
    <form action="addstaff.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input name="idEmpleado" type="text" placeholder="INGRESE SU ID">
      <input name="Categoria" type="text" placeholder="INGRESE SU CATEGORIA">
      <input name="FK_Persona" type="text" placeholder="INGRESE SU ID PERSONA">
      <input name="FK_tbl_staff" type="text" placeholder="INGRESE SU ID USU">
      <input type="submit" name="agreemple" value="GENERAR REGISTRO">
      <?php 
           include("validarPersona.php");
      ?>
    </form>
  </body>
</html>