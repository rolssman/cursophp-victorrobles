<meta charset="utf-8" />
<?php

/* 
 Hacer un programa que tenga un array de 5 números
enteros y hacer lo siguiente con él:
1. Recorrerlo y mostrarlo.
2. Ordenarlo y mostrarlo.
3. Mostrará su longitud.
4. Buscar en el vector.
 */

$numeros = array(30,20,40,50,10,5);

echo "<h2>Recorrer y mostrar:</h2>";

foreach ($numeros as $numero) {
	echo $numero."<br/>";
}


echo "<h2>Ordenar y mostrar</h2>";

//ordenar
sort($numeros);
rsort($numeros);

foreach ($numeros as $numero) {
	echo $numero."<br/>";
}


echo "<h2>Longitud del array o número de elementos: ".sizeof($numeros)."</h2>";

echo "<h2>Buscar en el array:</h2>";

if(!array_search(11, $numeros)){
	echo "<p>El número no existe en el array</p>";
}else{
	echo "<p>El número SI EXISTE en el array</p>";
}
