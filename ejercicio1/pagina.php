<?php
if ( isset($_POST["eleccion"]) ){
// si el dato está ubicado allí, es que acaban de usar el formulario y enviaron un estilo elegido.

	$hoja = $_POST["eleccion"];
	// entonces, dejamos preparada una variable para usarla dentro de <link>

	setcookie("elegido",$hoja,time()+(60 * 60 * 24 * 30));
	// y guardamos una variable a la que llamamos "elegido" dentro de una cookie; su valor lo tomamos de $_POST["eleccion" (o de $hoja que es lo mismo), y definimos su vencimiento para dentro de 30 días.

} else {
// si no encontramos en $_POST el dato, vemos si ya estaba en una cookie desde una visita anterior:

	if ( isset($_COOKIE["elegido"]) ){
	// si está, colocamos dentro de la misma variable $hoja lo que el usuario había elegido:
	
		$hoja = $_COOKIE["elegido"];

	} else {
	// si tampoco estaba allí, mostraremos una hoja por defecto:

	$hoja = "hoja-por-defecto";
	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Usando cookies para elegir hoja de estilos</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php
// sea cual sea el camino tomado anteriormente, la variable $hoja debe tener algún valor, así que lo leemos y lo usamos para que se cargue la hoja respectiva:
if ( isset($hoja) ) {

	echo '<link rel="stylesheet" type="text/css" href="'.$hoja.'.css" />';

}
?>
</head>
<body>
<h1>¡Elijamos un diseño!</h1>
<form action="pagina.php" method="post">
  <fieldset>
  <p>Cambiemos el estilo a nuestro gusto:</p>
  <select name="eleccion">
    <option value="minimalista">Minimalista</option>
    <option value="antigua">Antigua</option>
    <option value="moderna">Moderna</option>
    <option value="zoom">Fuentes grandes</option>
    <option value="tres">Tres columnas</option>
    <option value="dos">Dos columnas</option>
  </select>
  <input type="submit" value="Elegir" />
  </fieldset>
</form>
</body>
</html>