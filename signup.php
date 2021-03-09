<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO tbl_staff (username, password) VALUES (:username, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario registrado Satisfactoriamente!!!';
    } else {
      $message = 'Disculpe, se presento error en Password!!!';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <form action="signup.php" method="POST">
      <!--<input name="username" type="text" placeholder="Ingrese su email">-->
      <input name="username" type="email" placeholder="example@gmail.com">
      <input name="password" type="password" placeholder="Ingrese una contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme contraseña">
      <input type="submit" value="Generar Usuario">
    </form>

  </body>
</html>
