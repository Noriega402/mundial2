<?php 
	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/miEstilo.css">
	<title>Estadios de Qatar 2022</title>
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
						<li><a href="jugador.php">JUGADORES</a></li>
						<li><a href="grupo.php">GRUPOS</a></li>
					</ul>
				</nav>			
		</header>
	</div>

	<section>
		<div id="caja">
			<hgroup>
				<h1 align="center" style="color: white">ESTADIOS DE QATAR 2022</h1>
			</hgroup>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 1"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio1.jpg' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 2"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio2.jpg' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 3"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio3.png' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 4"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio4.jpg' class='imagen'>";
					}
				?>			
			</div>
			<div>
				<?php

					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 5"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio5.jpg' class='imagen'>";
					}
				?>			
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 6"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio6.png' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 7"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio7.png' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 8"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio8.jpg' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 9"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio9.png' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 10"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio10.jpg' class='imagen'>";
					}
				?>			
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 11"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio11.jpg' class='imagen'>";
					}
				?>
			</div>
			<div>
				<?php
					$consulta = "SELECT *FROM estadios WHERE Id_Estadio = 12"; 
					$query = mysqli_query($conexion,$consulta);
					while($resultado = mysqli_fetch_array($query))
					{
						echo
						"<h1 class='txt'>".
							$resultado["Nombre_Estadio"]."
						</h1>
						<img src='imagenes/estadio12.jpg' class='imagen'>";
					}
				?>
			</div>
		</div>
	</section>

</body>
</html>