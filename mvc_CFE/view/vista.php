<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Base de datos CFE</h1>
	<h2>Tabla Medidor</h2>
	<h2>Mendoza Castrejon Selma Sugey</h2>
	<table border="1">
		<tr>
			<td><strong>Id Medidor</strong></td>
			<td><strong>Numero de medidor</strong></td>
			<td><strong>Tipo de medidor</strong></td>
			<td><strong>Fecha de instalacion</strong></td>
			<td><strong>Id cliente</strong></td>
			<td><strong>Fecha de ultima lectura</strong></td>
			<td><strong>Id factura activa</strong></td>
			<td><strong>Marca medidor</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["Idmedidor"]; ?></td>
						<td><?php echo $pd[$i]["Nummedi"]; ?></td>
						<td><?php echo $pd[$i]["Tipomedi"]; ?></td>
						<td><?php echo $pd[$i]["Fechains"]; ?></td>
						<td><?php echo $pd[$i]["Idcliente"]; ?></td>
						<td><?php echo $pd[$i]["FechaUlti"]; ?></td>
						<td><?php echo $pd[$i]["IdFacAct"]; ?></td>
						<td><?php echo $pd[$i]["Marcamedi"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>