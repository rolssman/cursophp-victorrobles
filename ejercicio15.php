<?php

/* 
Crea un script PHP que tenga tres variables, una tipo
array, otra tipo string y otra boleana y que imprima
un mensaje según el tipo de variable que sea.
 */

$matriz = array("hola", 2);
$verdadero = TRUE;
$texto = "Bienvenido al curso de Víctor";

if(is_array($matriz)==true){
	echo "El array es un array<br/>";
}

if(is_bool($verdadero)){
	echo "El boleano es un boleano<br/>";
}

if(is_string($texto)){
	echo "El string es un string<br/>";
}
