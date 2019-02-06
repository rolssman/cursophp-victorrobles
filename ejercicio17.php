<?php

/* 
El cálculo del factorial se realiza en un bucle que va disminuyendo el
valor de una variable y multiplicando todos los valores entre sí, como
ya hemos visto anteriormente.
Aprovechando este patrón puede crear una función que realice la
factorial del número que le pasemos por parámetro, ahorrando así
líneas de código.
 */

function factorial($numero){
	$resultado = 1;
	for($x=$numero; $x > 0; $x--){
		$resultado *= $x;
	}
	
	return $resultado;
}

echo "<h2>El factorial</h2>";
$dato = 8;
echo "El factorial de ".$dato." es ".factorial($dato)."<br/>";

$dato = 12;
echo factorial($dato)."<br/>";

$num = 3;
echo factorial($num)."<br/>";

$i=9;
echo factorial($i)."<br/>";