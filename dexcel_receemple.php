<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM reservaemple";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Empleado</th>
			<th>Telefono</th>
			<th>Categoria</th>
			<th>Cod_Mesa</th>
			<th>Cod_Delivery</th>
			<th>Cod_Mesa</th>
			<th>Especialidades</th>
			<th>Plato</th>
			<th>Detalles</th>
			<th>Turno Tarde</th>
			<th>Turno Noche</th>
			<th>Precio</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['reserva_id_Reserva'];?></td>
			<td><?php echo $row['Empleado']       ;?></td>
			<td><?php echo $row['Telefono']   ;?></td>
			<td><?php echo $row['Categoria'] ;?></td>
			<td><?php echo $row['reserva_Cod_Mesa'] ;?></td>
			<td><?php echo $row['reserva_Cod_Delivery']    ;?></td>
			<td><?php echo $row['especialidades_Nombre']  ;?></td>
			<td><?php echo $row['platos_Nombre'] ;?></td>
			<td><?php echo $row['platos_Detalles'] ;?></td>
			<td><?php echo $row['turno_Tarde']    ;?></td>
			<td><?php echo $row['turno_Noche']  ;?></td>
			<td><?php echo $row['platos_Precio'] ;?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>