<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['id_Comprobante']) && !empty($_POST['Fecha']) && !empty($_POST['Observacion']) && !empty($_POST['FK_Factura']) && !empty($_POST['FK_Boleta']) ) {
    $sql = "INSERT INTO comprobante (id_Comprobante, Fecha, Observacion,FK_Factura,FK_Boleta) 
    VALUES (:id_Comprobante, :Fecha, :Observacion,:FK_Factura,:FK_Boleta)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_Comprobante', $_POST['id_Comprobante']);
    $stmt->bindParam(':Fecha', $_POST['Fecha']);
    $stmt->bindParam(':Observacion', $_POST['Observacion']);
    $stmt->bindParam(':FK_Factura', $_POST['FK_Factura']);
    $stmt->bindParam(':FK_Boleta', $_POST['FK_Boleta']);


    if ($stmt->execute()) {
      $message = 'Registro Exitoso!!!';
    } else {
      $message = 'Disculpe, se presento un error!!!';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AGREGAR COMPROBANTE</title>
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
    <h1>Agregar Comprobante</h1>
        <a href="sales.php"><span class="icon-home"></span></a>
    <form action="addComp.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input id="label" name="id_Comprobante" type="text" placeholder="INGRESE ID">
      <input id="label" name="Fecha" type="text" placeholder="FECHA">
      <input id="label" name="Observacion" type="text" placeholder="OBSERVACION">
       <input id="label" name="FK_Factura" type="text" placeholder="ID FACTURA">
        <input id="label" name="FK_Boleta" type="text" placeholder="ID BOLETA">
        <input id="boton" type="submit" onclick="eventoClickys();" value="GENERAR REGISTRO" name="btnActualizar">  
    </form>

<script type="text/javascript" src="../confirmacion.js"></script>
  </body>
</html>
