<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM preboleta";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Fecha</th>
			<th>Datos Personales</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Total</th>
			<th>Turno Tarde</th>
			<th>Turno Noche</th>
			<th>Cant Comensales</th>
		</tr>
	</thead>	
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['Id']; ?></td>
			<td><?php echo $row['Fecha']; ?></td>
			<td><?php echo $row['Cliente']; ?></td>
			<td><?php echo $row['Cantidad']; ?></td>
			<td><?php echo $row['Precio_Uni']; ?></td>
			<td><?php echo $row['Total']; ?></td>
			<td><?php echo $row['Tarde']; ?></td>
			<td><?php echo $row['Noche']; ?></td>
			<td><?php echo $row['Can_Comensales']; ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>