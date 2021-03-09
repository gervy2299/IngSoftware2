<?php 
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
?>
<?php
	require 'conexion.php';
	$sql = "SELECT * FROM  factura";
	$resultado = $mysqli->query($sql);
	
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Razon_Social</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>IGV</th>
			<th>Total</th>
		</tr>
	</thead>	
	<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
		<tr>
			<td><?php echo $row['id_Factura']; ?></td>
			<td><?php echo $row['Razon_Social']; ?></td>
			<td><?php echo $row['Cantidad']; ?></td>
			<td><?php echo $row['Precio']; ?></td>
			<td><?php echo $row['IGV']; ?></td>
			<td><?php echo $row['Total']; ?></td>

		</tr>
	<?php } ?>
	</tbody>
</table>