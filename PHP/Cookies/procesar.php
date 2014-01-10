<?php
	setcookie("cookieNom", $_POST['nombre'], time()+3600,"/","");
	setcookie("cookieApe", $_POST['apellidos'], time()+3600,"/","");
	setcookie("cookieTlf", $_POST['tlf'], time()+3600,"/","");
	setcookie("cookieDir", $_POST['dir'], time()+3600,"/","");
?>
<html>
	<head>
		<title>Procesar cookies</title>
	</head>
	<body>
		<H1>Procesar cookies</H1>
		<p>Se han establecido las siguientes cookies:</p>
		
		<?php
			$nombre = $_POST["nombre"];
			$apellidos = $_POST["apellidos"];
			$tlf = $_POST["tlf"];
			$dir = $_POST["dir"];
			$fecha = date("Y\-n\-j H\:i\:s");
			$ip = $_SERVER['REMOTE_ADDR'];
			$telef = utf8_decode('Teléfono');
			$direc = utf8_decode('Dirección');
			
			$archivo = fopen("archivo.txt", "a");									
			if ($archivo) {
				fputs($archivo, "IP = $ip, Fecha = $fecha, Nombre = $nombre, Apellidos = $apellidos, $telef = $tlf, $direc = $dir \r\n");
			}
			fclose ($archivo);
		?>
			
		<p><b>Nombre: </b><? print $nombre; ?> </p>
		<p><b>Apellidos: </b><? print $apellidos; ?> </p>
		<p><b>Tel&eacutefono: </b><? print $tlf; ?> </p>
		<p><b>Direcci&oacuten: </b><? print $dir; ?> </p>
	</body>
</html>