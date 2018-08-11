<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Zona de acceso restringido</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
// 1. Si acaban de enviar el formulario de acceso, leemos de $_POST los datos:
if( isset($_POST["usuario"]) and isset($_POST["clave"]) ){
// 2. En ese caso, verificamos que no estén vacíos:

	if( $_POST["usuario"]=="" or $_POST["clave"]=="") {
		
		echo "Por favor, completar usuario y clave";
		// 3. Si no estaban vacíos, comparamos lo ingresado con el usuario y clave definidos por nosotros, en este caso "pepe" y "123456". Aquí modificaremos esos datos y los cambiaremos por el usuario y clave que nos gusten.
		
	} elseif ($_POST["usuario"]=="pepe" and $_POST["clave"]=="123456"){
	// 4. Si eran correctos los datos, los colocamos en variables de sesión:
	
		$_SESSION["usuario"]=$_POST["usuario"];
		$_SESSION["clave"]=$_POST["clave"];
		
		echo "Usted se ha identificado como: ".$_SESSION["usuario"];

	} // 5. Aquí podríamos colocar un else con un mensaje si los datos no eran correctos.
}
?>
<div id="menu">
  <ul>
    <li><a href="primera.php">Primera p&aacute;gina privada</a></li>
    <li><a href="segunda.php">Segunda p&aacute;gina privada</a></li>
    <li><a href="tercera.php">Tercera p&aacute;gina privada</a></li>
  </ul>
</div>
<div id="formulario">
  <form name="acceso" method="post" action="index1.php">
    <fieldset>
    <legend>Ingrese sus datos de acceso:</legend>
    <label for="usuario">Su usuario:</label>
    <input type="text" id="usuario" name="usuario" />
    <br />
    <label for="clave">Su clave:</label>
    <input type="text" id="clave" name="clave" />
    <br />
    <input type="submit" id="ingresar" name="ingresar" value="Ingresar" />
    <br />
    </fieldset>
  </form>
</div>
</body>
</html>