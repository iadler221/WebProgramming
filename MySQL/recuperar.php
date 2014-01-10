<html>
	<head>
		<title>Listado</title>
	</head>
	<body>
		<H1>Listado</H1>
		<p>Listado de alumnos y sus correspondientes notas:</p>
		
		<?php
			$conexion = mysql_connect("127.0.0.1", "root", "root@localhost");
			mysql_select_db("colegio", $conexion);

			$seleccion = "SELECT * FROM alumnos;";
			$resultado = mysql_query($seleccion, $conexion);
			$numResultados = mysql_num_rows($resultado); 

			if ($numResultados> 0) {
				while ( $fila = mysql_fetch_assoc($resultado) ) {
					echo " Nombre = " . $fila['nombre'] . " - Nota = " . $fila['nota'] . "<br>";
				}
			}
		?>
	</body>
</html>