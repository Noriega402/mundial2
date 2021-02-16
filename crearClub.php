<?php 

	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db);

	isset($_GET["Id_Club"]);
	isset($_GET["Nombre_Club"]);
	isset($_GET["Id_Pais"]);

	$Id_Club = $_GET["Id_Club"];
	$nombre = $_GET["Nombre_Club"];
	$pais = $_GET["Id_Pais"];

	$consulta = "INSERT INTO club VALUES ('$Id_Club','$nombre','$pais');";
	mysqli_query($conexion,$consulta);

	echo
	"<script>
		window.location = 'club.php';
	</script>";
 ?>