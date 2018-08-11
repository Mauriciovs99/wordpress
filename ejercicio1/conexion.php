<?php
	$conectar=mysqli_connect("localhost","root","bobesponja","cursos");
	if(!$conectar){
		echo "<p> no se ha podido establecer conexión con la base de datos</p>";
	}
	else{
		echo "<p> se ha accedido a la base de datos";
	}
?>	