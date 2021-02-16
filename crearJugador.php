<?php 
	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"qatar2022");

	isset($_GET["Id_Jugador"]);
	isset($_GET["Nombre_Jugador"]);
	isset($_GET["Id_Puesto"]);
	isset($_GET["edad"]);
	isset($_GET["dorsal"]);
	isset($_GET["Id_Seleccion"]);
	isset($_GET["Id_Club"]);

	$Id_Jugador = $_GET["Id_Jugador"];
	$Nombre_Jugador = $_GET["Nombre_Jugador"];
	$Id_Puesto = $_GET["Id_Puesto"];
	$edad = $_GET["edad"];
	$dorsal = $_GET["dorsal"];
	$Id_Seleccion = $_GET["Id_Seleccion"];
	$Id_Club = $_GET["Id_Club"];

	$consulta = "INSERT INTO jugador VALUES ('$Id_Jugador','$Nombre_Jugador','$Id_Puesto','$edad','$dorsal','$Id_Seleccion','$Id_Club');";
	mysqli_query($conexion,$consulta);

	echo
	"<script>
		window.location = 'jugador.php';
	</script>";
?>