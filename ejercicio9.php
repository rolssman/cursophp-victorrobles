<?php

/* 
 Mostrar todos los números pares que hay entre el 1 y
el 100.
 */

for($i = 1; $i <= 100; $i++){
	if($i%2 == 0){
		echo $i." es par <br/>";
	}
}

for($i = 1; $i <= 100; $i++){
	if($i%2 != 0){
		echo $i." es impar <br/>";
	}
}