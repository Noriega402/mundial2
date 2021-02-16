<?php 
	$db = "qatar2022";
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,$db);

	isset($_GET["Id_Seleccion"]);
	isset($_GET["Nombre_Seleccion"]);
	isset($_GET["Id_Grupo"]);

	$Id_Seleccion = $_GET["Id_Seleccion"];
	$nombre = $_GET["Nombre_Seleccion"];
	$grupo = $_GET["Id_Grupo"];

	$consulta = "INSERT INTO seleccion VALUES ('$Id_Seleccion','$nombre','$grupo');";
	mysqli_query($conexion,$consulta);

	echo
	"<script>
		window.location = 'seleccion.php';
	</script>";
?>