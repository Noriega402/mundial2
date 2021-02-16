<?php 
	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db) or die (mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/miEstilo.css">
	<title>Selecciones de QATAR 2022</title>
	<meta charset="utf-8">
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
				<h1 align="center" style="color:white;">SELECCIONES DE QATAR 2022</h1>
			</hgroup>
		</div>
		<div id="caja2">
			<form action="crearSeleccion.php" method="GET">
				<label for="Id_Seleccion">Id Seleccion: 
					<input type="number" name="Id_Seleccion" min="1" max="32" required="obligatorio">
				</label>
				<label for="Nombre_Seleccion">Nombre Selección: 
					<input type="text" name="Nombre_Seleccion" placeholder="Nombre de Seleccion" required="obligatorio">
				</label>
				<label for="grupo">Grupo: 
					<select name="Id_Grupo" id="grupo" required="obligatorio">
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
				<input type="submit" value="CREAR" id="miBtn">	
			</form>
		</div>
	</section>
			
				<?php 
					$consulta = "SELECT *FROM seleccion;";
					$query = mysqli_query($conexion,$consulta);

					$recuperacion = 
					"<table id='tabla'>
						<tfoot>
							<tr>
								<td colspan='5'> Fin de la lista </td>
							</tr>
						</tfoot>
						<thead>
							<tr>
								<th> ID </th>
								<th> SELECCIÓN </th>
							</tr>				
						</thead>";
					while ($resultado = mysqli_fetch_array($query))
					{
						$recuperacion.="<tbody>
						<tr>
							<td id='columna'>".$resultado["Id_Seleccion"]."</td>
							<td id='columna2'>".$resultado["Nombre_Seleccion"]."</td>
						</tr>
						</tbody>";
					}
					echo $recuperacion;
				?>
</body>
</html>