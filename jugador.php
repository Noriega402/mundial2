<?php 
	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">
	<meta charset="utf-8">
	<title>Jugadores de Mundial QATAR 2022</title>
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
			<hgroup>
				<h1 align="center" style="color: white">Jugadores de QATAR 2022</h1>
			</hgroup>
		</div>
		<div id="caja3">
			<form action="crearJugador.php" method="GET">
				<label for="Id_Jugador">Id Jugador: 
					<input type="number" name="Id_Jugador" placeholder="Id Jugador" id="Id_Jugador">
				</label>
				<label for="Nombre_Jugador">Nombre Jugador: 
					<input type="text" name="Nombre_Jugador" placeholder="Nombre de Jugador" required="obigatorio" id="Nombre_Jugador">
				</label>
				<label for="Id_Puesto">Puesto: 
					<select name="Id_Puesto" id="Id_Puesto">
						<?php 
							$consulta = "SELECT *FROM puesto";
							$query = mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo 
								"<option value=".$resultado["Id_Puesto"].">".$resultado["Descripcion_Puesto"]."</option>";
							}
						?>	
					</select>
				</label>
				<label for="edad">Edad: 
					<input type="number" name="edad" id="edad" placeholder="Edad de Jugador" required="obigatorio" min="17" max="44">
				</label>
				<label for="dorsal">Dorsal: 
					<input type="number" name="dorsal" id="dorsal" placeholder="Dorsal de Jugador" required="obigatorio" min="1" max="99">
				</label>
				<label for="Id_Seleccion">Seleccion: 
					<select name="Id_Seleccion" id="Id_Seleccion">
						<?php 
							$consulta = "SELECT *FROM seleccion";
							$query = mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo 
								"<option value=".$resultado["Id_Seleccion"].">".$resultado["Nombre_Seleccion"]."</option>";
							}
						?>
					</select>
				</label>
				<label for="Id_Club">Club: 
					<select name="Id_Club" id="Id_Club">
						<?php 
							$consulta = "SELECT *FROM club";
							$query = mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo
								"<option value=".$resultado["Id_Club"].">".$resultado["Nombre_Club"]."</option>";
							}
						?>
					</select>
				</label>
				<input type="submit" value="CREAR" id="miBtn">	
			</form>
		</div>
	</section>
	<br><br>
	<section>
		<div>
			<form action="buscarPuesto.php" method="get">
				<label style="color: white;">Puesto:
					<select name="puesto">
						<?php 
							$consulta = "SELECT *FROM puesto";
							$query =mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo
								"<option value=".$resultado["Id_Puesto"].">".
									$resultado["Descripcion_Puesto"]."
									</option>";
							}
						?>
					</select>
				<input type="submit" value="Buscar">
				</label>
			</form>
		</div>
		<div>
			<form action="buscarEdad.php" method="get">
				<label style="color: white;">Edad:	
					<select name="Edad">
						<?php 
							$consulta = "SELECT jugador.Edad FROM jugador";
							$query =mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo
								"<option value=".$resultado["Edad"].">".
									$resultado["Edad"]."
									</option>";
							}
						?>
					</select>
				<input type="submit" value="Buscar">
				</label>
			</form>
		</div>
		<div>
			<form action="buscarDorsal.php" method="get">
				<label style="color: white;">Dorsal:	
					<select name="Dorsal">
						<?php 
							$consulta = "SELECT jugador.Dorsal FROM jugador";
							$query =mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo
								"<option value=".$resultado["Dorsal"].">".
									$resultado["Dorsal"]."
									</option>";
							}
						?>
						</select>
				<input type="submit" value="Buscar">
					</label>
			</form>
		</div>
		<div>
			<form action="buscarSeleccion.php" method="get">
				<label style="color: white;">Selecccion:	
					<select name="Seleccion">
						<?php 
							$consulta = "SELECT seleccion.Id_Seleccion, seleccion.Nombre_Seleccion FROM seleccion";
							$query =mysqli_query($conexion,$consulta);
							while ($resultado = mysqli_fetch_array($query))
							{
								echo
								"<option value=".$resultado["Id_Seleccion"].">".
									$resultado["Nombre_Seleccion"]."
									</option>";
							}
						?>
						</select>
				<input type="submit" value="Buscar">
				</label>
			</form>
		</div>
	</section>

	<?php 
					$consulta = "SELECT jugador.Id_Jugador, jugador.Nombre_Jugador, puesto.Descripcion_Puesto, jugador.Edad, jugador.Dorsal, seleccion.Nombre_Seleccion, club.Nombre_Club  
						FROM jugador
						INNER JOIN seleccion ON jugador.Id_Seleccion = seleccion.Id_Seleccion
						INNER JOIN puesto ON jugador.Id_Puesto = puesto.Id_Puesto
						INNER JOIN club ON jugador.Id_Club = club.Id_Club";
					$query = mysqli_query($conexion,$consulta);

					$recuperacion = 
					"<table id='tabla' style='width: 1000px;'>
						<tfoot>
							<tr>
								<td colspan='7'> Fin de la lista </td>
							</tr>
						</tfoot>
						<thead>
							<tr>
								<th> ID </th>
								<th> JUGADOR </th>
								<th> PUESTO </th>
								<th> EDAD </th>
								<th> DORSAL </th>
								<th> SELECCION </th>
								<th> CLUB </th>
							</tr>				
						</thead>";
					while ($resultado = mysqli_fetch_array($query))
					{
						$recuperacion.="<tbody>
						<tr>
							<td id='columna'>".$resultado["Id_Jugador"]."</td>
							<td id='columna2'>".$resultado["Nombre_Jugador"]."</td>
							<td id='columna2'>".$resultado["Descripcion_Puesto"]."</td>
							<td id='columna2'>".$resultado["Edad"]."</td>
							<td id='columna2'>".$resultado["Dorsal"]."</td>
							<td id='columna2'>".$resultado["Nombre_Seleccion"]."</td>
							<td id='columna2'>".$resultado["Nombre_Club"]."</td>
						</tr>
						</tbody>";
					}
					echo $recuperacion;
				?>
</body>
</html>