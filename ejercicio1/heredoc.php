<?php

#se puede insertar en una variable e imprimirla

$codigo=<<<EOT
<p>Este texto puede tener dentro "comillas", sin necesidad de escaparlas.</p>
<p>También procesa (remplaza por su valor) las $variables que hubiera dentro del código, tema que veremos próximamente.</p>
<p>Esta construcción del lenguaje llamada HEREDOC es ideal para incluir largos bloques de código HTML.</p>
EOT;

echo $codigo;

$variables="var"; #esta solo se imprime en el segundo bloque ya que en el primero no está definida como algo

echo <<<EOT
<p>Este texto puede tener dentro "comillas", sin necesidad de escaparlas.</p>
<p>También procesa (remplaza por su valor) las $variables que hubiera dentro del código, tema que veremos próximamente.</p>
<p>Esta construcción del lenguaje llamada HEREDOC es ideal para incluir largos bloques de código HTML.</p>
EOT;

?>