<?php 
	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
	<title>Fase de Grupos 2022</title>
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
	<section>
		<div>
			<hgroup><h1 align="center" style="color: white">Fase de Grupos de QATAR 2022</h1></hgroup>	
		</div>
		<div id="caja4">
			<form action="buscarGrupo.php" method="GET">
				<label for="Id_Grupo">Grupo: 
					<select name="Id_Grupo" id="Id_Grupo">
						<?php 
							$consulta = "SELECT *FROM grupo";
							$query = mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo
								"<option value=".$resultado["Id_Grupo"].">".$resultado["Nombre_Grupo"]."</option>";
							}
						?>
					</select>
				</label>
				<input type="submit" value="VER" id="miBtn" style="margin-top: 5px;">
			</form>
		</div>
	</section>

</body>
</html>