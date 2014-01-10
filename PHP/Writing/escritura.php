<html>
	<body>
		<?php
			$archivo = fopen("fichero.txt", "a");
			if ($archivo) {
				$fecha = date("Y\-n\-j H\:i\:s");
				fputs($archivo, "$fecha \r\n");
			}
			fclose ($archivo);
			echo "$fecha";
		?>
	</body>
</html>