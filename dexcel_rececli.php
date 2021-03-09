<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM reservacli";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Cliente</th>
			<th>Telefono</th>
			<th>Cant Comesales</th>
			<th>Turno Tarde</th>
			<th>Turno Noche</th>
			<th>Cod_Mesa</th>
			<th>Cod_Delivery</th>
			<th>Especialidades</th>
			<th>Plato</th>
			<th>Detalles</th>
			<th>Precio</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['Id'];?></td>
			<td><?php echo $row['Cliente']       ;?></td>
			<td><?php echo $row['Telefono']   ;?></td>
			<td><?php echo $row['Can_Comensales'] ;?></td>
			<td><?php echo $row['Tarde'] ;?></td>
			<td><?php echo $row['Noche']    ;?></td>
			<td><?php echo $row['Cod_Mesa']  ;?></td>
			<td><?php echo $row['Cod_Delivery'] ;?></td>
			<td><?php echo $row['Especialidades'] ;?></td>
			<td><?php echo $row['Plato']    ;?></td>
			<td><?php echo $row['Platos_Detalles']  ;?></td>
			<td><?php echo $row['Platos_Precio'] ;?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>