<?php
//Variables de conexion
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'restomaria';

/*Conexion a bd*/
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
   //echo "CONECTADO";
} catch (PDOException $e) {
  die('Connection Failed: ' .$e->getMessage());
}
?>
<?php

$mysqli = new mysqli('localhost', 'root','root','restomaria');
if($mysqli->connect_error){
	die('Error en la conexion' . $mysqli->connect_error);
}
?>