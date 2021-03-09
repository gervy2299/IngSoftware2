<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM datespecilidades";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombres</th>
			<th>Detalles</th>
			<th>Plato</th>
			<th>Detalles</th>
			<th>Precio</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['Id'];?></td>
			<td><?php echo $row['Nombre']       ;?></td>
			<td><?php echo $row['Detalles']   ;?></td>
			<td><?php echo $row['Plato'] ;?></td>
			<td><?php echo $row['Platos_Detalles'] ;?></td>
			<td><?php echo $row['Platos_Precio']    ;?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>