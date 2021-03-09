<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM platos";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Detalles</th>
			<th>Precio</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['id_Platos'];?></td>
			<td><?php echo $row['Nombre']       ;?></td>
			<td><?php echo $row['Detalles']   ;?></td>
			<td><?php echo $row['Precio'] ;?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>