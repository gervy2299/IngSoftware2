<?php

$mysqli=new mysqli('localhost','root','funciona','restomaria');
if($mysqli->connect_error){
	die('Error en la conexion' . $mysqli->connect_error);
}
$id=$_POST['ID'];
$sql ="SELECT Razon_Social,Cantidad,Precio,IGV,Total FROM factura WHERE id_Factura='$id'";
$resultado =$mysqli->query($sql);
$row =$resultado->fetch_array(MYSQLI_ASSOC);
echo json_encode($row);
?>
