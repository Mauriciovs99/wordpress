<?php
	if(!(isset($_COOKIE["mauricio"]))){
		setcookie("mauricio", "hola", 0);
	}
?> 
<html>
	  <head>
	  	<title>Cookie</title>
	  </head>
	  <body><h1>"Página que inserta una cookie"</h1>
	 <?php
	  	if((isset($_COOKIE["mauricio"]))){
		echo 'La cookie que contiene ' .$_COOKIE["mauricio"]. ' se ha guardado';
	}
	?>
	  </body>
	 </html>
