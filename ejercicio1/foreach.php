<?php
	$animales[4]="Perro";
	$animales[5]="Gato";
	$animales[21]="Tortuga";
	$animales[3]="Hamster";
	$animales[45]="Canario";

	foreach($animales as $clave=>$valor){ //también se puede colo $animales as $valor y no obtendrá el índice de dónde se almacena
		print('<p>El animal '.$clave. ' es '.$valor.'</p>');
	}
?>	