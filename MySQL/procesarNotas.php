<?php
	$nombre = $_POST["nombre"];
	$nota = $_POST["nota"];
			
	$conexion = mysql_connect("127.0.0.1", "root", "root@localhost");
	mysql_select_db("colegio", $conexion);

	$seleccion = "SELECT * FROM alumnos;";
	$resultado = mysql_query($seleccion, $conexion);
	$numFilas = mysql_num_rows($resultado); 
	$numFilas++;

	$insert = mysql_query("INSERT INTO alumnos(ID, nombre, nota) VALUES ($numFilas, \"" .$nombre ."\", $nota);");
	if(!$insert)
	{
		$message = 'INVALID query: ' .mysql_error()."\n";
		die($message);
	}
	else{
		echo "VALID query";
	}

?>