<?php

/* 
 Crea una función a la que le pases un número y te
saque su tabla de multiplicar.
 */
function tabla($numero){
	$tabla = "";
	for($i = 1; $i <= 10; $i++){
		$cuenta = $i*$numero;
		$tabla .= "{$i} x {$numero} = {$cuenta} <br/>";
	}
	
	return $tabla;
}

echo "<h1>Tablas de multiplicar</h1>";

for($i = 1; $i <= 10; $i++){
	echo "<h3>Tabla del {$i}</h3>";
	echo tabla($i);
}

echo tabla(77);