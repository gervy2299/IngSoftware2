<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM persona";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>DNI</th>
			<th>Nombres</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Correo</th>
			<th>Telefono</th>
			<th>Dirección</th>
		</tr>
	</thead>		
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['id_Persona'];?></td>
			<td><?php echo $row['DNI']       ;?></td>
			<td><?php echo $row['Nombres']   ;?></td>
			<td><?php echo $row['Apell_Pat'] ;?></td>
			<td><?php echo $row['Apell_Mat'] ;?></td>
			<td><?php echo $row['Correo']    ;?></td>
			<td><?php echo $row['Telefono']  ;?></td>
			<td><?php echo $row['Direccion'] ;?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>