<?php

$mysqli=new mysqli('localhost','root','funciona','restomaria');
if($mysqli->connect_error){
	die('Error en la conexion' . $mysqli->connect_error);
}
$id=$_POST['ID'];
$sql ="SELECT Fecha,Observacion,FK_Factura,FK_Boleta FROM comprobante WHERE id_Comprobante='$id'";
$resultado =$mysqli->query($sql);
$row =$resultado->fetch_array(MYSQLI_ASSOC);
echo json_encode($row);
?>
