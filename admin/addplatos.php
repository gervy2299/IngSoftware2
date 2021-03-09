<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['id_Platos']) && !empty($_POST['Nombre']) && !empty($_POST['Detalles']) && !empty($_POST['Precio'])  && !empty($_POST['FK_Especialidades']) ) {
    $sql = "INSERT INTO platos (id_Platos, Nombre, Detalles,Precio,FK_Especialidades) 
    VALUES (:id_Platos, :Nombre, :Detalles,:Precio,:FK_Especialidades)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_Platos', $_POST['id_Platos']);
    $stmt->bindParam(':Nombre', $_POST['Nombre']);
    $stmt->bindParam(':Detalles', $_POST['Detalles']);
      $stmt->bindParam(':Precio', $_POST['Precio']);
      $stmt->bindParam(':FK_Especialidades', $_POST['FK_Especialidades']);
    if ($stmt->execute()) {
      $message = 'Plato registrado Satisfactoriamente!!!';
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
    <h1>REGISTRO PLATOS</h1>
    <a href="menu.php"><span class="icon-home"></span></a>
    
    <form action="addplatos.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input name="id_Platos" type="text" placeholder="INGRESE SU ID">
      <input name="Nombre" type="text" placeholder="NOMBRE">
      <input name="Detalles" type="text" placeholder="INGRESE DETALLE">
       <input name="Precio" type="text" placeholder="INGRESE PRECIO">
       <input name="FK_Especialidades" type="text" placeholder="INGRESE ID ESPECIALIDAD">
      <input type="submit" value="GENERAR REGISTRO">
    </form>


  </body>
</html>
