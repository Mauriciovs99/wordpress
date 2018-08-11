<?php
	session_start();
	print(session_name());
    $identificador=session_id();
    echo $identificador;
    echo $_SESSION["usuario"];
?>