<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM datosempleado";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>DNI</th>
			<th>Categoria</th>
			<th>Datos Personales</th>
			<th>Correo</th>
			<th>Telefono</th>
			<th>Dirección</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['Id']; ?></td>
			<td><?php echo $row['DNI']; ?></td>
			<td><?php echo $row['Categoria']; ?></td>
			<td><?php echo $row['Empleado']; ?></td>
			<td><?php echo $row['Correo']; ?></td>
			<td><?php echo $row['Telefono']; ?></td>
			<td><?php echo $row['Direccion']; ?></td>
			
		</tr>
	<?php } ?>
	</tbody>
</table>