<?php
  require '../database.php';
  $message = '';
  if (!empty($_POST['id_Factura']) && !empty($_POST['Razon_Social']) && !empty($_POST['Cantidad']) && !empty($_POST['Precio'])  ) {

   $IGV=($_POST['Cantidad']*$_POST['Precio'])*0.18;
   $Total=$IGV+($_POST['Cantidad']*$_POST['Precio']);

    $sql = "INSERT INTO factura (id_Factura, Razon_Social, Cantidad,Precio,IGV,Total) 
    VALUES (:id_Factura, :Razon_Social, :Cantidad,:Precio,:IGV,:Total)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id_Factura', $_POST['id_Factura']);
    $stmt->bindParam(':Razon_Social', $_POST['Razon_Social']);
    $stmt->bindParam(':Cantidad', $_POST['Cantidad']);
      $stmt->bindParam(':Precio', $_POST['Precio']);
       $stmt->bindParam(':IGV',  $IGV);
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
    <title>AGREGAR FACTURA</title>
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
    <h1>Registro de Factura</h1>
     <a href="sales.php"><span class="icon-home"></span></a>
    <form action="addfactura.php" method="POST"> <!--IMPORTANTE PONER EL MISMO NOMBRE, al hacer click te manda aqui-->
      <input id="label" name="id_Factura" type="text" placeholder="INGRESE ID">
      <input id="label" name="Razon_Social" type="text" placeholder="RAZON SOCIAL">
      <input id="label" name="Cantidad" type="text" placeholder="CANTIDAD">
       <input id="label" name="Precio" type="text" placeholder="PRECIO ">
      <!--  <input id="label" name="IGV" type="text" placeholder="IGV">
       <input id="label" name="Total" type="text" placeholder="TOTAL">-->
      
        <input id="boton" type="submit" onclick="eventoClicky();" value="GENERAR REGISTRO" name="btnActualizar"> <br>     
    </form>

  </body>
</html>
