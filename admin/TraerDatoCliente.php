<?php

$mysqli=new mysqli('localhost','root','funciona','restomaria');
if($mysqli->connect_error){
	die('Error en la conexion' . $mysqli->connect_error);
}

$id=$_POST['ID'];

$sql ="SELECT Can_Comensales,FK_Persona FROM cliente WHERE 	idcliente='$id'";

$resultado =$mysqli->query($sql);

$row =$resultado->fetch_array(MYSQLI_ASSOC);

echo json_encode($row);
?>
