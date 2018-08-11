<?php
	$contenido=fopen("noticia.txt","r");
	fpassthru($contenido); //imprime el contenido con un echo como párrafo en pantalla
	fclose($contenido);
?>