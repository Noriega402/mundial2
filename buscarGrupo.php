<?php 
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"qatar2022");


	isset($_GET["Id_Grupo"]);

	$Id_Grupo = $_GET["Id_Grupo"];

	$consulta = "SELECT seleccion.Nombre_Seleccion, grupo.Nombre_Grupo
				FROM seleccion
				INNER JOIN grupo ON seleccion.Id_Grupo = grupo.Id_Grupo
				WHERE grupo.Id_Grupo = '$Id_Grupo';";
	$query = mysqli_query($conexion,$consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/miEstilo.css">
	<title>Grupos de QATAR 2022</title>
</head>
<body>
		<div id="contenido">
		<header>
			<hgroup><h1>Copa del Mundo QATAR 2022</h1></hgroup>
				<nav>
					<ul>
						<li><a href="index.html">INICIO</a></li>
						<li><a href="estadios.php">ESTADIOS</a></li>
						<li><a href="seleccion.php">SELECCIONES</a></li>
						<li><a href="club.php">CLUBES</a></li>
						<li><a href="jugador.php">JUGADORES</a></li>
						<li><a href="grupo.php">GRUPOS</a></li>						
					</ul>
				</nav>			
		</header>
	</div>

	<table border="collapse" id="tabla">
		<thead>
			<th>SELECCIÓN</th>
		</thead>
		<tbody>
			<?php 
			while ($filas = mysqli_fetch_assoc($query))
			{
				echo 
				"<tr>
					<td>".$filas["Nombre_Seleccion"]."</td>
				</tr>";
			}
			?>
		</tbody>
	</table>

</body>
</html>