<?php 
	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db);

	isset($_GET["Dorsal"]);

	$dorsal = $_GET["Dorsal"];

	$consulta = "SELECT jugador.Nombre_Jugador 
				FROM jugador WHERE Dorsal = '$dorsal'";

	$query = mysqli_query($conexion,$consulta);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/miEstilo.css">
	<title></title>
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

	<table id="tabla">
		<thead>
			<th>JUGADOR</th>
		</thead>
		<tbody>
			<?php 
			while ($resultado = mysqli_fetch_array($query))
			{
				echo
					"<tr>
						<td id='columna2'>".$resultado["Nombre_Jugador"]."</td>
					</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>