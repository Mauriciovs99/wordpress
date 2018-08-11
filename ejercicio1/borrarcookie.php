<?php
	if((isset($_COOKIE["mauricio"]))){
		setcookie("mauricio", "hola",time()+0); //elimina el archivo del disco del usuario ya que hace que dure 0 segundos
		//unset($_COOKIE["mauricio"]); //la cookie sigue en el usuario, pero se borra del array $_COOKIES[] al llegar al servidor, por lo que piensa que no está definida en el usuario, esto se aplica inmediatamente en el servidor, no necesita otra petición para que se reflejen los cambios, cuando se vuelva a pedir, seguirá definida en el usuario
		//setcookie("mauricio"); //borra la cookie del navegador usuario igual que el primero, en el libro decía que sólo borraba su contenido y la cookie se quedaba, pero no veo ese comportamiento (p.134)
	}
?> 
<html>
	  <head>
	  	<title>Cookie</title>
	  </head>
	  <body><h1>"Página que borra"</h1>
	 <?php
	  	if(!(isset($_COOKIE["mauricio"]))){
		echo 'La cookie que contiene ' .$_COOKIE["mauricio"]. ' se ha borrado';
	}
	?>
	  </body>
	 </html>