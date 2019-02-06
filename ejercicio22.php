<?php

/* 
 Modifica el ejercicio anterior para pasarle un
parámetro opcional que nos permita imprimir
directamente la tabla en HTML
 */

function tabla($numero, $html = null){
	$tabla = "";
	
	for($i = 1; $i <= 10; $i++){
		$cuenta = $i*$numero;
		$tabla .= "{$i} x {$numero} = {$cuenta} <br/>";
	}
	
	if($html != null){
		echo "<h3>Tabla del {$numero}</h3>";
		echo $tabla;
	}
	
	return $tabla;
}

echo "<h1>Tablas de multiplicar</h1>";

for($i = 1; $i <= 10; $i++){
	tabla($i, true); // si solo se envia un parametro no funciona
}