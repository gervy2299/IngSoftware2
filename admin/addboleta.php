<?php
  require '../database.php';
  $message = '';
  
  if (!empty($_POST['id_Boleta']) && !empty($_POST['Cantidad']) && !empty($_POST['Precio_Uni'])  ) {
    $Total=$_POST['Cantidad']*$_POST['Precio_Uni'];
    $sql = "INSERT INTO boleta (id_Boleta, Cantidad, Precio_Uni,Total) 
    VALUES (:id_Boleta, :Cantidad, :Precio_Uni,:Total)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_Boleta', $_POST['id_Boleta']);
    $stmt->bindParam(':Cantidad', $_POST['Cantidad']);
    $stmt->bindParam(':Precio_Uni', $_POST['Precio_Uni']);
    $stmt->bindParam(':Total', $Total);

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
    <title>Document</title>
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
    <h1>Registro de Boletas</h1>
    <a href="sales.php"><span class="icon-home"></span></a>
    <form action="addboleta.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input id="label" name="id_Boleta" type="text" placeholder="INGRESE ID">
      <input id="label" name="Cantidad" type="text" placeholder="CANTIDAD">
      <input id="label" name="Precio_Uni" type="text" placeholder="PRECIO UNI.">
      <!-- <input id="label" name="Total" type="text" placeholder="INGRESE TOTAL">-->
      
        <input id="boton" type="submit" onclick="eventoClickys();" value="GENERAR REGISTRO" name="btnActualizar"><br>
      
    <input id="boton" type="submit"  value="RECARGAR" name="btnLimpiar">
    </form>


  </body>
</html>
