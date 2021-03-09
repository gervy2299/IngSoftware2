<?php //PARA VALIDAR
if(isset($_POST['agreemple'])){
  $ID=$_POST['idEmpleado'];  
  $CATE=$_POST['Categoria'];
  $FKPER=$_POST['FK_Persona'];
  $FKUSER=$_POST['FK_tbl_staff'];  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://file.myfontastic.com/qE2tungYsfWcFNBMjibczE/icons.css" rel="stylesheet">
  <title>Actualizar Regsitro</title>
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
  border: 1.5px solid #47695A;
  margin: 20px auto;
}
input[type="submit"] {
  padding: 20px;
  color: #fff;
  background: #B2A326;
  width: 320px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #CDCE6B;
}
a{
  padding: 20px;
  color: #422C2C;
  background: url(recursos/princi.png);
  width: 420px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
  text-decoration: none;
} 
#recar{
  background: #5FCAA0;
}
  h1:hover{
color: #9B4F4F;
font-size: 2.5em;
}
</style>

</head>
<body>
  
    <h1>Actualizar Empleadoo</h1>
     <a href="staff.php"><span class="icon-home"></span></a> 
<form action="ediempleado.php" method="POST">

      <input id="idEmpleado" name="idEmpleado" type="text" placeholder="INGRESE SU ID" onfocusout="cionEmpleado()">
      <input id="Cate" name="Categoria" type="text" placeholder="INGRESE SU CATEGORIA">
      <input id="FKPer" name="FK_Persona" type="text" placeholder="INGRESE SUS ID PERSONA">
      <input id="FKsta" name="FK_tbl_staff" type="text" placeholder="INGRESE SU ID USUARIO">

  <input type="submit" onclick="eventoClicky();" value="Actualizar Registro" name="btnActualizar"><br>
  <input type="submit" id="recar" value="Verificar" name="agreemple"><br>
<!--No es necesario esto si hay veri-->
<?php 
      include("validarPersona.php");
      error_reporting(0); //para las notice
      ?>

</form>

<?php
$server="localhost";
$usuario="root";
$contraseña="funciona";
$bd="restomaria";

$conexion=mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

$idEmpleado= $_POST['idEmpleado'];
$Categoria= $_POST['Categoria'];
$FK_Persona= $_POST['FK_Persona'];
$FK_tbl_staff= $_POST['FK_tbl_staff'];

mysqli_query($conexion, "UPDATE empleado set Categoria='$Categoria', FK_Persona='$FK_Persona', FK_tbl_staff='$FK_tbl_staff' where idEmpleado ='$idEmpleado'") or die("Error al actualizar");
//mysqli_query($conexion, "UPDATE persona set celular='$celular' where idpersona='$idpersona'") or die("Error al actualizar celular");
//mysqli_query($conexion, "UPDATE persona set Direccion='$Direccion' where idpersona='$idpersona'") or die("Error al actualizar");
mysqli_close($conexion);
//echo "Datos actualizados correctamente";
?>
<script type="text/javascript" src="../notis.js"></script>
<script type="text/javascript" src="../notis.js"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><!--IMPORTANTE.PARA.EDI-->
 <!--IMPORTANTE.PARA.EDI-->
<script type="text/javascript" >
  
function cionEmpleado(){

var ID=document.getElementById('idEmpleado').value;

console.log(ID);
$.post("TraerDatoEmpleadoo.php",{ID}).done(function (data) { //nombres ' ' igual que los id de arriba

var arr_from_json = JSON.parse(data);
document.getElementById('cate').value=arr_from_json.Categoria;
document.getElementById('FKPer').value=arr_from_json.FK_Persona;
document.getElementById('FKsta').value=arr_from_json.FK_tbl_staff;
});

}

</script>
</body>
</html>
