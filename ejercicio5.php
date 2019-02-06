<?php

/* 
 Imprimir por pantalla la tabla de multiplicar del
número pasado en un parámetro GET por la URL.
 */ // si esta vacio && si es numerico
if(isset($_GET["numero"]) && is_numeric($_GET["numero"])){
	$numero = $_GET["numero"];
}else{
	$numero = 5; //defecto
	echo "<p>Numero por defecto</p>";
}


echo "<h2>Tabla de multiplicar de ".$numero."</h2>";

for($i = 1; $i <= 10; $i++){
	echo $i." x ".$numero." = ".($i*$numero)."<br/>";
}
