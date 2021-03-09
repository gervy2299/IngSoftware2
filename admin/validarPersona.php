<?php //AGREGAR Y ACTUALIZAR PERSONA
if (isset($_POST['submit'])) {
	if (empty($ID)) {
		echo "<p> *Agrega tu ID </p>";
	} else{
		if(!is_numeric($ID)){
			echo "<p> *El ID debe ser un número</p>";
		}
	}
	if (empty($DNI)) {
		echo "<p> *Agrega tu DNI </p>";
	} else{
		if(!is_numeric($DNI)){
			echo "<p> *El DNI debe ser un número</p>";
		} else{
		if (strlen($DNI)>8) {echo "<p> *El DNI tiene que ser menor a 8 dígitos</p>"; }
	}
	}
	if (empty($NOMBRE)) {
		echo "<p> *Agrega tu Nombre </p>";
	} 
	else{
		if (strlen($NOMBRE)>15) {
		echo "<p> *El Nombre es muy largo </p>";
		} 
		else{
		if(is_numeric($NOMBRE)){echo "<p> *El Nombre no debe ser un número</p>";}
	        }
	   }

	if (empty($APELLPAT)) {
		echo "<p> *Agrega tu Apellido Paterno</p>";
	} else{
		if (strlen($APELLPAT)>15) {
		echo "<p> *El Apellido Paterno es muy largo </p>";
		} 
		else{
		if(is_numeric($APELLPAT)){echo "<p> *El Apellido Paterno no debe ser un número</p>";}
	        }
	}
	if (empty($APELLMAT)) {
		echo "<p> *Agrega tu Apellido Materno </p>";
	} else{
		if (strlen($APELLMAT)>15) {
		echo "<p> *El Apellido Materno es muy largo </p>";
		} 
		else{
		if(is_numeric($APELLMAT)){echo "<p> *El Apellido Materno no debe ser un número</p>";}
	        }
	}
	if (empty($CORREO)) {
		echo "<p> *Agrega tu Correo</p>";
	} else{
		if(!filter_var($CORREO, FILTER_VALIDATE_EMAIL)) {
			echo "<p>*El correo es incorrecto </p>";
		}
	}
	if (empty($TELEFONO)) {
		echo "<p> *Agrega tu Telefono </p>";
	} else{
		if(!is_numeric($TELEFONO)){
			echo "<p> *El Teléfono debe ser un número</p>";
		}else{
		if (strlen($TELEFONO)>9) {echo "<p> *El Telefono tiene que ser menor a 9 dígitos</p>"; }
	}
	}
	if (empty($DIRECCION)) {
		echo "<p> *Agrega tu Direccion </p>";
	} 
}
?>
<?php //ELIMINAR PERSONA
if (isset($_POST['verieli'])) {
	if (empty($ID)) {
		echo "<p> *Agrega tu ID </p>";
	} else{
		if(!is_numeric($ID)){
			echo "<p> *El ID debe ser un número</p>";
		}
	}
	}
?>
<?php //AGREGAR Y ACTUALIZAR CLIENTE
if (isset($_POST['agrecli'])) {
	if (empty($ID)) {
		echo "<p> *Agrega tu ID </p>";
	} 
	if (empty($CAN)) {
		echo "<p> *Agrega la cantidad de comensales</p>";
	} else{
		if(!is_numeric($CAN)){
			echo "<p> *La cantidad de comensales debe ser un número</p>";
		}else{
		if($CAN>30){echo "<p> *La cantidad de comensales debe ser menos de 30 personas</p>";}
	        }
	}

	if (empty($FKPER)) {
		echo "<p> *Agrega el Id Persona </p>";
	} else{
		if(!is_numeric($FKPER)){
			echo "<p> *El Id Persona debe ser un número</p>";
		}
	}
}	
?>
<?php //ELIMINAR CLIENTE
if (isset($_POST['elicli'])) {
	if (empty($ID)) {
		echo "<p> *Agrega tu ID </p>";
	} 
	}
?>

<?php //AGREGAR Y ACTUALIZAR EMPLEADO
if (isset($_POST['agreemple'])) {
	if (empty($ID)) {
		echo "<p> *Agrega tu ID </p>";
	} 
	if (empty($CATE)) {
		echo "<p> *Agrega la Categoria</p>";
	} else{
		if(is_numeric($CATE)){
			echo "<p> *La Categoria no debe ser un número</p>";
		}
	}
	if (empty($FKPER)) {
		echo "<p> *Agrega el Id Persona </p>";
	} else{
		if(!is_numeric($FKPER)){
			echo "<p> *El Id Persona debe ser un número</p>";
		}
	}
	if (empty($FKUSER)) {
		echo "<p> *Agrega el Id Usuario </p>";
	} else{
		if(!is_numeric($FKUSER)){
			echo "<p> *El Id Usuario debe ser un número</p>";
		}
	}
}	
?>

<?php //ELIMINAR EMPLEADO
if (isset($_POST['eliem'])) {
	if (empty($ID)) {
		echo "<p> *Agrega tu ID </p>";
	} 
	}
?>

<?php //correo
if (isset($_POST['btnlogin'])) {
	if (empty($CORREO)) {
		echo "<p> *Agrega tu Correo</p>";
	} else{
		if(!filter_var($CORREO, FILTER_VALIDATE_EMAIL)) {
			echo "<p>*El correo es incorrecto </p>";
		}
	}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		p{
  padding: 15px;
  color: #fff;
  background: #D00912;
  width: 310px;
  margin: 20px auto;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
		}
	</style>
</head>
<body>
	
</body>
</html>