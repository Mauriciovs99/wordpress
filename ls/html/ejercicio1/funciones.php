<?php
include("datos.php");
function conectarBase($host,$usuario,$clave,$base){

	if (mysqli_connect($host,$usuario,$clave,$base)){
		echo 'hola';

		return false;
	
	} elseif (!mysqli_select_db($base)){
		echo 'hola1';
	
		return false;
	
	} else {
		echo'hola2';
	
		return true;
	
	}

}

$jeje=conectarBase($host,$usuario,$clave,$base);
?>