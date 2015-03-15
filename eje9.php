<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title>ejercicio 9</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="problema">
	<h1>Ejercicio #9</h1>
	<p>	
		Desarrolle un script en php que imprima los datos almacenados en un arreglo el
		cual debe de contener la siguiente estructura:
	</p>
	</div>
	<div class="solucion">
	<?php
	$nombre='Eduardo Lobos';
	$edad='20';
	$municipio='Zacatecoluca';
	$telefono='22223333';
	$casa='pasaje 4, pol G';
	$cel='74913369';


	
	?>
	<table>
		<thead>
			<tr>
				<th>Datos</th>
				<th></th>
			</tr>
			
		</thead>

		<tbody>
			

			<tr>
				<td>Nombre: <?php print  $nombre ?></td>
			</tr>
			<tr>
				<td>Edad: <?php print $edad ?></td>
			</tr>
			<tr>
				<td>Municipio: <?php print $municipio ?></td>
			</tr>
			<tr>
				<td>Telefono: <?php print $telefono ?></td>
					<td>Casa: <?php print $casa ?></td>
					<td>:::::::</td>


			</tr>
			


		</tbody>

		
	</table>
	</div>
	<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>