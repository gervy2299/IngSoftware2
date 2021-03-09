<?php 
  include("../functions.php");
  if((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])) ) 
    header("Location: login.php");
  if($_SESSION['user_level'] != "admin")
    header("Location: login.php");
?>
<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['id_Turno']) && !empty($_POST['Tarde']) && !empty($_POST['Noche']) && !empty($_POST['FK_cliente']) ) {
    $sql = "INSERT INTO cliente (id_Turno, Tarde, Noche, FK_cliente) 
    VALUES (:id_Turno, :Tarde, :Noche, :FK_cliente)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_Turno', $_POST['id_Turno']);
    $stmt->bindParam(':Tarde', $_POST['Tarde']);
    $stmt->bindParam(':Noche', $_POST['Noche']);
    $stmt->bindParam(':FK_cliente', $_POST['FK_cliente']);
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
    <title>AGREGAR TURNOS</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Registro Turnos</h1>
    
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
      <a href="cliente.php"><span class="icon-home"></span></a>
    <form action="addTurno.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input name="id_Turno" type="text" placeholder="INGRESE SU ID">
      <input name="Tarde" type="text" placeholder="INGRESE TURNO TARDE">
      <input name="Noche" type="text" placeholder="INGRESE TURNO NOCHE">
      <input name="FK_cliente" type="text" placeholder="INGRESE SU ID CLIENTE">
     <input type="submit" name="submit" value="GENERAR REGISTRO">
    </form>

<script type="text/javascript" src="../notis.js"></script>
  </body>
</html>
