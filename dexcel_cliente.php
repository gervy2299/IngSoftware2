<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM datoscliente";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>DNI</th>
			<th>Datos Personales</th>
			<th>Correo</th>
			<th>Telefono</th>
			<th>Dirección</th>
			<th>Cant Comensales</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['cliente_idcliente']; ?></td>
			<td><?php echo $row['persona_DNI']; ?></td>
			<td><?php echo $row['Cliente']; ?></td>
			<td><?php echo $row['Correo']; ?></td>
			<td><?php echo $row['Telefono']; ?></td>
			<td><?php echo $row['Direccion']; ?></td>
			<td><?php echo $row['Can_Comensales']; ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>