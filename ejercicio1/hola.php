<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Hola</title>
</head>
<body>
	<h1>Esto está escrito en HTML.</h1>
	<?php
		print("<h2>Hola mundo! Esto lo escribió el intérprete de PHP</h2>");
	?>	
	<p>Esto ya estaba escrito encódigo HTML</p>
	<?php
		print("<p>Esto también lo escribió el software intérprete de PHP</p>")
	?>
	<p><a href="index.php"><?php print("Volver a la Home del sitio, escrito por PHP"); ?></a></p>	
</body>
</html>		