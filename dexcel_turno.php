<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM vvturno";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Turno Tarde</th>
			<th>Turno Noche</th>
			<th>Cod Mesa</th>
			<th>Cod Delivery</th>
			<th>Categoria</th>
			<th>Id</th>
			<th>Empleado</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['Tarde'];?></td>
			<td><?php echo $row['Noche']       ;?></td>
			<td><?php echo $row['Cod_Mesa']   ;?></td>
			<td><?php echo $row['Cod_Delivery'] ;?></td>
			<td><?php echo $row['Categoria'] ;?></td>
			<td><?php echo $row['idEmpleado']    ;?></td>
			<td><?php echo $row['persona']  ;?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>