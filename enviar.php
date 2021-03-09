<?php 
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$txtcantidad=$_POST['txtcantidad'];
$platos=$_POST['platos'];
$turno=$_POST['turno'];
$mensaje=$_POST['mensaje'];
/*Header identifica el mensaje*/
$header='From: ' . $mail . " \r\n";
$header .="X-Mailer: PHP/" . phpversion() . " \r\n";
$header .="Mime.Version: 1.0 \r\n";
$header .="Content-Type: text/plain";

/*conformación del mensaje: como se entregara el mensaje*/
$mensaje= "Este mensaje fue enviado por: " .$nombre . " \r\n";
$mensaje .="Su e-mail es: " .$correo . " \r\n"; 
$mensaje .="Telefono de contacto: " .$telefono . " \r\n";
$mensaje .="Caantidad es: " .$txtcantidad . " \r\n";
$mensaje .="Platos son: " .$platos . " \r\n";
$mensaje .="Turno es: " .$turno . " \r\n";
$mensaje .= "Mensaje: " .$mensaje . " \r\n";
$mensaje .="Enviado el: " .date('d/m/Y', time());

$para ='torijen600@gmail.com';
$asunto= 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location: contacto.php");
echo "<script> alert('correo enviado exitosamente')</script>";