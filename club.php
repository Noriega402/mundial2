<?php 
	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
	<title>Clubes 2022</title>
</head>
<body>

	<div id="contenido">
		<header>
			<hgroup><h1>Copa del Mundo QATAR 2022</h1></hgroup>
		</header>
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
	</div>
	<section>
		<div id="caja5">
			<form action="crearClub.php" method="GET">
				<label for="Id_Club">Id Club: 
					<input type="number" name="Id_Club" placeholder="Id Club" autofocus="" id="Id_Club" required="obligatorio">
				</label>
				<label for="Nombre_Club">Nombre de Club: 
					<input type="text" name="Nombre_Club" placeholder="Nombre de Club" required="obligatorio" id="Nombre_Club">
				</label>
				<label for="Id_Pais">Pais de Origen: 
					<select name="Id_Pais" id="Id_Pais">
						<?php 
							$consulta = "SELECT *FROM pais";
							$query =mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo
								"<option value=".$resultado["Id_Pais"].">".$resultado["Nombre_Pais"]."</option>";
							}
						?>
					</select>
				</label>
				<input type="submit" value="CREAR" id="miBtn">
			</form>
		</div>
	</section>
	

</body>
</html>