<?php

$mysqli = new mysqli('localhost','root','funciona','restomaria');
if($mysqli->connect_error){
	die('Error en la conexion' . $mysqli->connect_error);
}
$id=$_POST['ID'];
$sql ="SELECT DNI,Nombres,Apell_Pat,Apell_Mat,Correo,Telefono,Direccion FROM persona WHERE id_Persona ='$id'";
$resultado =$mysqli->query($sql);
$row =$resultado->fetch_array(MYSQLI_ASSOC);
echo json_encode($row);
?>
