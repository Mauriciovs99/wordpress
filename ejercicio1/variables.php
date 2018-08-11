<?php
$nombre="Mau";
$mensaje="Hola, $nombre";

echo $mensaje; //escribe el mensaje
echo "$mensaje"; //escribe el mensaje
echo '$mensaje'; //escribe literalmente $mensaje porque las comillas simples hacen eso,
echo ''.$mensaje.''; // entonces se pone "." para arreglarlo
?>