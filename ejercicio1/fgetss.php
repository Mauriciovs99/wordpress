<?php
$identificador = fopen ("index1.php", "r");

while(!feof($identificador)){

	$linea = fgetss($identificador, 1024);
	echo $linea."<br />";
	
}

fclose($identificador);
?>