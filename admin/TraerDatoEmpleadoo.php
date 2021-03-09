<?php

$mysqli=new mysqli('localhost','root','funciona','restomaria');

if($mysqli->connect_error){

	die('Error en la conexion' . $mysqli->connect_error);
}

$id=$_POST['ID'];
$sql ="SELECT Categoria,FK_Persona,FK_tbl_staff FROM empleado WHERE idEmpleado='$id'";
$resultado =$mysqli->query($sql);
$row =$resultado->fetch_array(MYSQLI_ASSOC);

echo json_encode($row);
?>