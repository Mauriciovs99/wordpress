<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Suscriptores</title>
</head>
<body>
<?php
// Abrimos el archivo, pero esta vez para añadir.
$abierto = fopen ("suscriptores.txt", "a");

// Preparamos los datos
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$texto = $nombre." - ".$email."\n";

// Intentamos añadirlos, validando que se haya podido hacer
if (fputs ($abierto,$texto)){

	print ("<p>Gracias por sus datos</p>");
	
} else {

	print ("<p>Hubo un error. Intente nuevamente</p>");

}

// Cerramos el archivo.
fclose ($abierto);
?>
</body>
</html>